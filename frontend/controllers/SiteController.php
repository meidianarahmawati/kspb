<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Publikasi;
use yii\data\ArrayDataProvider;
use yii\httpclient\Client;
use yii\helpers\Json;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $listpublikasi = Publikasi::find()->all();
        return $this->render('index', ['listpublikasi'=>$listpublikasi,]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            Yii::$app->session->setFlash('success', 'Welcome '.$model->username);
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionDetailpub($id)
    {
        $publikasi = Publikasi::findOne($id);
        return $this->render('detailpub', ['publikasi'=>$publikasi,]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPublikasi()
    {
        $listpublikasi = Publikasi::find()->all();
        return $this->render('publikasi', ['listpublikasi'=>$listpublikasi,]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionUploadpub()
    {
        $publikasi = new Publikasi();
        return $this->render('uploadpub', ['publikasi'=>$publikasi,]);
    }

    public function actionStorepub()
    {
        $publikasi = new Publikasi();
        if ($publikasi->load(Yii::$app->request->post())) {
            $publikasi->tags=implode(" ", $publikasi->tags);
            $publikasi->created_at=time();
            $publikasi->updated_at=time();
            $publikasi->uploaded_by=Yii::$app->user->identity->id;

            $thumbnail_file = UploadedFile::getInstance($publikasi, 'thumbnail_file');
            if(!is_null($thumbnail_file)){
                $publikasi->thumbnail_src_filename=$thumbnail_file->name;
                //$ext = end ((explode(".", $src_file->name)));
                $tmp = explode('.', $thumbnail_file->name);
                $ext = end($tmp);
                $publikasi->thumbnail_web_filename=Yii::$app->security->generateRandomString().".{$ext}";
                Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/images/downloadable/';
                $path = Yii::$app->params['uploadPath'] . $publikasi->thumbnail_web_filename;
                $thumbnail_file->saveAs($path);
            }

            $attachment_file = UploadedFile::getInstance($publikasi, 'attachment_file');
            if(!is_null($attachment_file)){
                $publikasi->attachment_src_filename=$attachment_file->name;
                //$ext = end ((explode(".", $src_file->name)));
                $tmp = explode('.', $attachment_file->name);
                $ext = end($tmp);
                $publikasi->attachment_web_filename=Yii::$app->security->generateRandomString().".{$ext}";
                Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/images/downloadable/';
                $path = Yii::$app->params['uploadPath'] . $publikasi->attachment_web_filename;
                $attachment_file->saveAs($path);
            }

            if($publikasi->save()){
                Yii::$app->session->setFlash('success', 'Upload berhasil.');
            }else{
                Yii::$app->session->setFlash('error', 'Upload gagal. Mohon ulangi kembali. ');
                var_dump ($publikasi->getErrors()); die();
            }            
        }
        return $this->redirect('@web/index.php?r=site%2Fpublikasi');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionBelum()
    {
        return $this->render('belum');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPengurus()
    {
        return $this->render('pengurus');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionSk()
    {
        return $this->render('sk');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMencegah()
    {
        return $this->render('mencegah');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMengenal()
    {
        return $this->render('mengenal');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMengantisipasi()
    {
        $apicovid = 'https://api.covid19api.com/';
        $d=strtotime("-2 days");
        $urlindo='country/id?from='.date("Y-m-d",$d).'T00:00:00Z&to='.date("Y-m-d").'T00:00:00Z';
        $client = new Client(['baseUrl' => $apicovid]);
        $response = $client->createRequest()
          ->setUrl($urlindo)
          ->addHeaders(['content-type' => 'application/json'])
          ->send();
        $data = Json::decode($response->content);
        //echo $apicovid.$urlindo."<br/>";
        //var_dump($response);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $world = $client->createRequest()
          ->setUrl('summary')
          ->addHeaders(['content-type' => 'application/json'])
          ->send();
        $dataworld = Json::decode($world->content);

        return $this->render('mengantisipasi',['dataProvider' => $dataProvider, 'summarydate' => $dataworld, 'sumberindo' => $apicovid.'country/id', 'sumberworld' => $apicovid.'summary']);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMengobati()
    {
        return $this->render('mengobati');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. You can login to get more access.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
