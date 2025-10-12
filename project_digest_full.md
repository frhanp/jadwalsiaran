# Project Digest (Full Content)
_Generated: 2025-10-12 12:48:22_
**Root:** D:\Laragon\www\jadwalsiaran


## Struktur Proyek (filtered, no depth limit)
```
.git
app
bootstrap
config
database
node_modules
public
resources
routes
storage
tests
vendor
.editorconfig
.env
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
digest.ps1
package-lock.json
package.json
PANDUAN_PROJECT_JADWAL_SIARAN.md
phpunit.xml
postcss.config.js
project_digest_full.md
README.md
tailwind.config.js
vite.config.js
app\Http
app\Models
app\Providers
app\View
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Controllers\Admin
app\Http\Controllers\Auth
app\Http\Controllers\Penyiar
app\Http\Controllers\Controller.php
app\Http\Controllers\DashboardController.php
app\Http\Controllers\LaporanController.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\Admin\ItemDetailController.php
app\Http\Controllers\Admin\JadwalPetugasController.php
app\Http\Controllers\Admin\MateriDetailController.php
app\Http\Controllers\Admin\ProgramController.php
app\Http\Controllers\Admin\SequenceController.php
app\Http\Controllers\Admin\SequenceItemController.php
app\Http\Controllers\Admin\StudioController.php
app\Http\Controllers\Admin\UserController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Controllers\Penyiar\JadwalController.php
app\Http\Middleware\RoleMiddleware.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Models\ItemDetail.php
app\Models\JadwalPetugas.php
app\Models\MateriDetail.php
app\Models\Program.php
app\Models\Sequence.php
app\Models\SequenceItem.php
app\Models\Studio.php
app\Models\User.php
app\Providers\AppServiceProvider.php
app\View\Components
app\View\Components\AppLayout.php
app\View\Components\GuestLayout.php
bootstrap\cache
bootstrap\app.php
bootstrap\providers.php
bootstrap\cache\.gitignore
bootstrap\cache\packages.php
bootstrap\cache\services.php
config\app.php
config\auth.php
config\cache.php
config\database.php
config\excel.php
config\filesystems.php
config\logging.php
config\mail.php
config\queue.php
config\services.php
config\session.php
database\factories
database\migrations
database\seeders
database\.gitignore
database\factories\UserFactory.php
database\migrations\0001_01_01_000000_create_users_table.php
database\migrations\0001_01_01_000001_create_cache_table.php
database\migrations\0001_01_01_000002_create_jobs_table.php
database\migrations\2025_09_27_041320_create_programs_table.php
database\migrations\2025_09_27_041322_create_sequences_table.php
database\migrations\2025_09_27_041322_create_sequence_items_table.php
database\migrations\2025_09_27_041323_create_materi_details_table.php
database\migrations\2025_09_27_041324_create_item_details_table.php
database\migrations\2025_09_27_074706_create_jadwal_petugas_table.php
database\migrations\2025_10_10_003852_modify_penyiar_relationship_in_jadwal_petugas_table.php
database\migrations\2025_10_10_115757_add_jumlah_pendengar_to_sequences_table.php
database\migrations\2025_10_10_130544_change_petugas_ids_to_names_in_jadwal_petugas_table.php
database\migrations\2025_10_10_171922_create_studios_table.php
database\migrations\2025_10_10_171944_add_studio_id_to_programs_table.php
database\seeders\DatabaseSeeder.php
database\seeders\JadwalPetugasSeeder.php
database\seeders\ProgramSeeder.php
database\seeders\ScheduleContentSeeder.php
database\seeders\StudioSeeder.php
database\seeders\UserSeeder.php
public\build
public\.htaccess
public\favicon.ico
public\hot
public\index.php
public\robots.txt
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\admin
resources\views\auth
resources\views\components
resources\views\jadwal
resources\views\laporan
resources\views\layouts
resources\views\penyiar
resources\views\profile
resources\views\dashboard.blade.php
resources\views\welcome.blade.php
resources\views\admin\item-details
resources\views\admin\items
resources\views\admin\materi-details
resources\views\admin\petugas
resources\views\admin\programs
resources\views\admin\sequences
resources\views\admin\studios
resources\views\admin\users
resources\views\admin\item-details\manage.blade.php
resources\views\admin\items\create.blade.php
resources\views\admin\items\edit.blade.php
resources\views\admin\items\index.blade.php
resources\views\admin\materi-details\manage.blade.php
resources\views\admin\petugas\create.blade.php
resources\views\admin\petugas\edit.blade.php
resources\views\admin\petugas\index.blade.php
resources\views\admin\petugas\_form.blade.php
resources\views\admin\programs\create.blade.php
resources\views\admin\programs\edit.blade.php
resources\views\admin\programs\index.blade.php
resources\views\admin\sequences\create.blade.php
resources\views\admin\sequences\edit.blade.php
resources\views\admin\sequences\index.blade.php
resources\views\admin\studios\create.blade.php
resources\views\admin\studios\edit.blade.php
resources\views\admin\studios\index.blade.php
resources\views\admin\users\create.blade.php
resources\views\admin\users\edit.blade.php
resources\views\admin\users\index.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\laporan\jadwal.blade.php
resources\views\laporan\jadwal_print.blade.php
resources\views\laporan\_tabel_program.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\penyiar\jadwal
resources\views\penyiar\jadwal\index.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
routes\auth.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\private
storage\app\public
storage\app\.gitignore
storage\app\private\.gitignore
storage\app\public\.gitignore
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\.gitignore
storage\framework\cache\data\.gitignore
storage\framework\sessions\.gitignore
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\009451551b189deb53b3aa27fff7ab3a.php
storage\framework\views\035e08034bd2a9374e0b9a2a024a8dc0.php
storage\framework\views\07f0f7effd565a1947ae1e3a88a83bb4.php
storage\framework\views\0adf6831ebea126648979baa7f7b22b2.php
storage\framework\views\0b6d41b356f4b13b331e58b17b509a67.php
storage\framework\views\0cff1b1b66097aaa2bfdc4f7fc08e9bd.php
storage\framework\views\0dcc36b21464a764e4d0ef857746a767.php
storage\framework\views\14a2d53d37acbea1231caae07ee00108.php
storage\framework\views\154580fb5887853d9924ef43c1d736ea.php
storage\framework\views\1b900349747cfa54f4aa60bf5d3e3648.php
storage\framework\views\1c8a71a2d9199698b3a19314922f91b0.php
storage\framework\views\1ca9e9fbf20ed0e068163f2c864d2cfe.php
storage\framework\views\1f796bb69fa7f514a983b9d7899aff67.php
storage\framework\views\254d3ac6621c93d737a454bf775eee8b.php
storage\framework\views\25d27b4217d628ed13819a6a76dbfb57.php
storage\framework\views\261ff914b65da2fc3d72c0bd41ad8f14.php
storage\framework\views\2a9e2eebb8128e1a5de2b94cf066fb0a.php
storage\framework\views\2fd6c1d6fb909050c4d2af731927504c.php
storage\framework\views\329f5b96f8ca0e543442f19e8f19afb5.php
storage\framework\views\37eb828fe514f2b9b8d738fe55f10881.php
storage\framework\views\3bac30ba8c1fc90ba0aa219679a248c1.php
storage\framework\views\3bb2fc9bf2db3cd3f6a608fcb66f1a26.php
storage\framework\views\3c2ba3673319080d81bda26e38aff7cd.php
storage\framework\views\3eae8d97970e5ceff3e0b5bdc01895e8.php
storage\framework\views\418ce072e1d10293c00e01cd4c6c9cb7.php
storage\framework\views\43db7e2c2976b92b611245d3d4421543.php
storage\framework\views\44c9f5a56a44e3850b8bd7acd0f394c8.php
storage\framework\views\45a3fc020f34bb83ecdd9805dc7a126c.php
storage\framework\views\45b61f44a49e78a969c38f320f6de079.php
storage\framework\views\45eca80902b1a73207ef8f27834696be.php
storage\framework\views\47d9763d6d57d60cacf879d367e3f1f4.php
storage\framework\views\48d0a71e66e2c72f3941c0e0f31095cd.php
storage\framework\views\495f4db45a9ce2ed9672af2d261c1da5.php
storage\framework\views\4fa4c4f0f557cf19d88683f952137102.php
storage\framework\views\53547a15944e5711fe3b8d6dd90393bd.php
storage\framework\views\537667b33011396269e30deb5e78cbb3.php
storage\framework\views\57af163985f30bf03926a7ee9487a0e6.php
storage\framework\views\5d13ae6b3b3b1da1548321fb35a7cbf8.php
storage\framework\views\69c9b7f138bb840594aeee21c43cd8ec.php
storage\framework\views\6dd1787a73a4a362a02cd21d33de6f03.php
storage\framework\views\6f987950985d9147788673c4ddeb40b0.php
storage\framework\views\7078c5e0c7ac23f6d58c9872e5a46ff1.php
storage\framework\views\709a8a31d0615eb7ffb67664da9a47ef.php
storage\framework\views\72bdbefa9eedcf5be213118603ade76c.php
storage\framework\views\77ec844aad46f8a212ea3e9cc7396b50.php
storage\framework\views\79ef96b9dd2aa1b0af7ab74962331ceb.php
storage\framework\views\7c60c9908bbceab1821502b0ff153bce.php
storage\framework\views\7d9159b2880d6c7b101e589c26b623c9.php
storage\framework\views\7ee28aeb58bfb61176c4673b9eee062d.php
storage\framework\views\7f75d95895297bd3077883ccabd667bd.php
storage\framework\views\819e8bb9081de1570a6cc1718ec12d59.php
storage\framework\views\835cf87a6095cb561a89433fa5c25691.php
storage\framework\views\85ed325697d24741b286434f3a1e93ba.php
storage\framework\views\86b7c125649709e962c1e608445d1a0a.php
storage\framework\views\894eda82901b49834942f01dd75b0671.php
storage\framework\views\8c6a5e0d675ecd35d643eceb60b910ad.php
storage\framework\views\8d41e98faa2f6eae64bab5ae7444f543.php
storage\framework\views\8eaefbeef2877b88cd6f3fde4eed1180.php
storage\framework\views\9368a9c96e0366c161733099d3c3b2d6.php
storage\framework\views\956a6eb56328307aaa2583b78ce3ce2f.php
storage\framework\views\9740683addb575ade8749ba4067a8695.php
storage\framework\views\979d5c9e1ec39bd60eefee3605768e59.php
storage\framework\views\99179cd21570d22aff6bd027ea9435d2.php
storage\framework\views\9aeea8f721404a367aa3f641ced83509.php
storage\framework\views\9c486e65310f1a7ec5bf49caa682d4c5.php
storage\framework\views\a38428fe0ca1a2d5793b9e5a060db05f.php
storage\framework\views\a50999f3f2b7c6016126a5ed8ba8b419.php
storage\framework\views\a5628588dddc08e3cec66f71564b050f.php
storage\framework\views\a5dcebba30532fc3806c48626dd16750.php
storage\framework\views\a91ae81c6b2d0df85d42ff91b0b9a1a0.php
storage\framework\views\ae37206701858e6669bc717d07c42f21.php
storage\framework\views\b25618829c4ed3181cc24ec47cee1413.php
storage\framework\views\b2827d4107c5e292eda969b92cd383bb.php
storage\framework\views\b2f6c58031740453831980803c2675bc.php
storage\framework\views\b6ed3e0f2844e865082d060281a3271e.php
storage\framework\views\b74732fc91ae76c15b616706238ed6d2.php
storage\framework\views\b91c34942c81ea1c0907a696538e3ae9.php
storage\framework\views\bc2cf7dff4d580731da4f39a9f6b93f6.php
storage\framework\views\c37d4ee79108556466f1a75b5ec7ae2a.php
storage\framework\views\c5adea323da972726f39bce473990041.php
storage\framework\views\c6248e54e1dda208d55adea5c6cada1b.php
storage\framework\views\c6913df7f00481a1499ed3a6a2b94740.php
storage\framework\views\c727d077df28b5f9ce2f121bddf4ca06.php
storage\framework\views\c9a859b1d55686455d3d1e9c1c231940.php
storage\framework\views\c9f41955b8e5b0708cf3d957afac2c4a.php
storage\framework\views\ca31f3dd677eef1d20d732c98dc6c488.php
storage\framework\views\caf0456962dc4b624331c7e069af6ba5.php
storage\framework\views\cde089ae42ec946b7c618a9463fac7ce.php
storage\framework\views\d621116e5999be378366c2e053a568d8.php
storage\framework\views\db27ab924c3d74acb6ec1e7a1d53c940.php
storage\framework\views\dbb919b6e35a7b018c383ce8537e4739.php
storage\framework\views\e5d4165ba4b5fce64b8dbe66a86b8a6c.php
storage\framework\views\eec69a543710c9f0b8f6bea13f251dbf.php
storage\framework\views\ef11c019bd5db12b2c7e82619fe2ccdc.php
storage\framework\views\f48e5bfb2825d7a65b0b26f2e2893d61.php
storage\framework\views\f66bd993da8d7c4b8c5f53d64bfe9b42.php
storage\framework\views\f6c434f01a5cc4e4a3457e86dc21e397.php
storage\framework\views\f9b8ca811441a38158388b15e4a309f4.php
storage\framework\views\fab7ae848d61b55d27c47dffe8096691.php
storage\framework\views\ff4fa2bbc66bdf3754b7bd4e0fd3202c.php
tests\Feature
tests\Unit
tests\TestCase.php
tests\Feature\Auth
tests\Feature\ExampleTest.php
tests\Feature\ProfileTest.php
tests\Feature\Auth\AuthenticationTest.php
tests\Feature\Auth\EmailVerificationTest.php
tests\Feature\Auth\PasswordConfirmationTest.php
tests\Feature\Auth\PasswordResetTest.php
tests\Feature\Auth\PasswordUpdateTest.php
tests\Feature\Auth\RegistrationTest.php
tests\Unit\ExampleTest.php
```


## Info Git
```
Remote:
origin	https://github.com/frhanp/jadwalsiaran.git (fetch)
origin	https://github.com/frhanp/jadwalsiaran.git (push)

Branch:
main

Last 5 commits:
03f0895 fix penamaan
eb94ec7 fix tampilan v1
59d69d1 ubah sequences menjadi seqmen
a45aceb fix studio v2
af71858 fix studio v1
```


## Dependencies (summary)
```
composer.json (require):
  (parse error / none)
composer.json (require-dev):
  (parse error / none)

package.json (dependencies):
  (parse error / none)
package.json (devDependencies):
  (parse error / none)
```


## Routes Files Content
```
===== routes\auth.php =====
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

===== routes\console.php =====
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

===== routes\web.php =====
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SequenceController;
use App\Http\Controllers\Admin\SequenceItemController;
use App\Http\Controllers\Admin\MateriDetailController;
use App\Http\Controllers\Admin\ItemDetailController;
use App\Http\Controllers\Penyiar\JadwalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Admin\JadwalPetugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\StudioController;
use Illuminate\Support\Facades\Auth;







Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {

    Route::middleware(['role:admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('users', UserController::class); 
        Route::resource('programs', ProgramController::class);
        Route::resource('programs.sequences', SequenceController::class)->except(['show'])->shallow();
        Route::resource('sequences.items', SequenceItemController::class)->except(['show'])->shallow();
        Route::get('items/{item}/materi-details', [MateriDetailController::class, 'edit'])->name('items.materi-details.manage');
        Route::put('items/{item}/materi-details', [MateriDetailController::class, 'update'])->name('items.materi-details.update-all');
        Route::get('items/{item}/item-details', [ItemDetailController::class, 'edit'])->name('items.item-details.manage');
        Route::put('items/{item}/item-details', [ItemDetailController::class, 'update'])->name('items.item-details.update-all');
        Route::resource('programs.petugas', JadwalPetugasController::class)->parameters(['petugas' => 'jadwalPetugas']);
        Route::resource('studios', StudioController::class);
        });

    // Grup untuk Penyiar
    Route::middleware(['role:penyiar'])->name('penyiar.')->prefix('penyiar')->group(function () {
        Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
        Route::resource('sequences.items', SequenceItemController::class)->except(['show'])->shallow();
        Route::get('items/{item}/materi-details', [MateriDetailController::class, 'edit'])->name('items.materi-details.manage');
        Route::put('items/{item}/materi-details', [MateriDetailController::class, 'update'])->name('items.materi-details.update-all');
        Route::get('items/{item}/item-details', [ItemDetailController::class, 'edit'])->name('items.item-details.manage');
        Route::put('items/{item}/item-details', [ItemDetailController::class, 'update'])->name('items.item-details.update-all');
        Route::patch('sequences/{sequence}/pendengar', [SequenceController::class, 'updatePendengar'])->name('sequences.pendengar.update');
    });

    // Grup untuk Kepsta dan Katim (hanya laporan)
    Route::middleware(['role:kepsta,katim'])->name('laporan.')->prefix('laporan')->group(function () {
        Route::get('jadwal-harian', [LaporanController::class, 'index'])->name('jadwal.harian');
        Route::get('jadwal-harian/cetak', [LaporanController::class, 'cetak'])->name('jadwal.cetak');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';

```


## Routes (from command)
```

  GET|HEAD        / ........................................................................................................................... 
  GET|HEAD        _debugbar/assets/javascript ..................................... debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD        _debugbar/assets/stylesheets .................................. debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE          _debugbar/cache/{key}/{tags?} ............................ debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD        _debugbar/clockwork/{id} ........................... debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD        _debugbar/open ...................................... debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST            _debugbar/queries/explain .......................... debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  PUT|PATCH       admin/items/{item} ................................................. admin.items.update ΓÇ║ Admin\SequenceItemController@update
  DELETE          admin/items/{item} ............................................... admin.items.destroy ΓÇ║ Admin\SequenceItemController@destroy
  GET|HEAD        admin/items/{item}/edit ................................................ admin.items.edit ΓÇ║ Admin\SequenceItemController@edit
  GET|HEAD        admin/items/{item}/item-details ........................... admin.items.item-details.manage ΓÇ║ Admin\ItemDetailController@edit
  PUT             admin/items/{item}/item-details ..................... admin.items.item-details.update-all ΓÇ║ Admin\ItemDetailController@update
  GET|HEAD        admin/items/{item}/materi-details ..................... admin.items.materi-details.manage ΓÇ║ Admin\MateriDetailController@edit
  PUT             admin/items/{item}/materi-details ............... admin.items.materi-details.update-all ΓÇ║ Admin\MateriDetailController@update
  GET|HEAD        admin/programs ......................................................... admin.programs.index ΓÇ║ Admin\ProgramController@index
  POST            admin/programs ......................................................... admin.programs.store ΓÇ║ Admin\ProgramController@store
  GET|HEAD        admin/programs/create ................................................ admin.programs.create ΓÇ║ Admin\ProgramController@create
  GET|HEAD        admin/programs/{program} ................................................. admin.programs.show ΓÇ║ Admin\ProgramController@show
  PUT|PATCH       admin/programs/{program} ............................................. admin.programs.update ΓÇ║ Admin\ProgramController@update
  DELETE          admin/programs/{program} ........................................... admin.programs.destroy ΓÇ║ Admin\ProgramController@destroy
  GET|HEAD        admin/programs/{program}/edit ............................................ admin.programs.edit ΓÇ║ Admin\ProgramController@edit
  GET|HEAD        admin/programs/{program}/petugas ......................... admin.programs.petugas.index ΓÇ║ Admin\JadwalPetugasController@index
  POST            admin/programs/{program}/petugas ......................... admin.programs.petugas.store ΓÇ║ Admin\JadwalPetugasController@store
  GET|HEAD        admin/programs/{program}/petugas/create ................ admin.programs.petugas.create ΓÇ║ Admin\JadwalPetugasController@create
  GET|HEAD        admin/programs/{program}/petugas/{jadwalPetugas} ........... admin.programs.petugas.show ΓÇ║ Admin\JadwalPetugasController@show
  PUT|PATCH       admin/programs/{program}/petugas/{jadwalPetugas} ....... admin.programs.petugas.update ΓÇ║ Admin\JadwalPetugasController@update
  DELETE          admin/programs/{program}/petugas/{jadwalPetugas} ..... admin.programs.petugas.destroy ΓÇ║ Admin\JadwalPetugasController@destroy
  GET|HEAD        admin/programs/{program}/petugas/{jadwalPetugas}/edit ...... admin.programs.petugas.edit ΓÇ║ Admin\JadwalPetugasController@edit
  GET|HEAD        admin/programs/{program}/sequences .......................... admin.programs.sequences.index ΓÇ║ Admin\SequenceController@index
  POST            admin/programs/{program}/sequences .......................... admin.programs.sequences.store ΓÇ║ Admin\SequenceController@store
  GET|HEAD        admin/programs/{program}/sequences/create ................. admin.programs.sequences.create ΓÇ║ Admin\SequenceController@create
  PUT|PATCH       admin/sequences/{sequence} ......................................... admin.sequences.update ΓÇ║ Admin\SequenceController@update
  DELETE          admin/sequences/{sequence} ....................................... admin.sequences.destroy ΓÇ║ Admin\SequenceController@destroy
  GET|HEAD        admin/sequences/{sequence}/edit ........................................ admin.sequences.edit ΓÇ║ Admin\SequenceController@edit
  GET|HEAD        admin/sequences/{sequence}/items ........................... admin.sequences.items.index ΓÇ║ Admin\SequenceItemController@index
  POST            admin/sequences/{sequence}/items ........................... admin.sequences.items.store ΓÇ║ Admin\SequenceItemController@store
  GET|HEAD        admin/sequences/{sequence}/items/create .................. admin.sequences.items.create ΓÇ║ Admin\SequenceItemController@create
  GET|HEAD        admin/studios ............................................................ admin.studios.index ΓÇ║ Admin\StudioController@index
  POST            admin/studios ............................................................ admin.studios.store ΓÇ║ Admin\StudioController@store
  GET|HEAD        admin/studios/create ................................................... admin.studios.create ΓÇ║ Admin\StudioController@create
  GET|HEAD        admin/studios/{studio} ..................................................... admin.studios.show ΓÇ║ Admin\StudioController@show
  PUT|PATCH       admin/studios/{studio} ................................................. admin.studios.update ΓÇ║ Admin\StudioController@update
  DELETE          admin/studios/{studio} ............................................... admin.studios.destroy ΓÇ║ Admin\StudioController@destroy
  GET|HEAD        admin/studios/{studio}/edit ................................................ admin.studios.edit ΓÇ║ Admin\StudioController@edit
  GET|HEAD        admin/users .................................................................. admin.users.index ΓÇ║ Admin\UserController@index
  POST            admin/users .................................................................. admin.users.store ΓÇ║ Admin\UserController@store
  GET|HEAD        admin/users/create ......................................................... admin.users.create ΓÇ║ Admin\UserController@create
  GET|HEAD        admin/users/{user} ............................................................. admin.users.show ΓÇ║ Admin\UserController@show
  PUT|PATCH       admin/users/{user} ......................................................... admin.users.update ΓÇ║ Admin\UserController@update
  DELETE          admin/users/{user} ....................................................... admin.users.destroy ΓÇ║ Admin\UserController@destroy
  GET|HEAD        admin/users/{user}/edit ........................................................ admin.users.edit ΓÇ║ Admin\UserController@edit
  GET|HEAD        confirm-password ................................................. password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST            confirm-password ................................................................... Auth\ConfirmablePasswordController@store
  GET|HEAD        dashboard ............................................................................. dashboard ΓÇ║ DashboardController@index
  POST            email/verification-notification ...................... verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD        forgot-password .................................................. password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST            forgot-password ..................................................... password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD        laporan/jadwal-harian ....................................................... laporan.jadwal.harian ΓÇ║ LaporanController@index
  GET|HEAD        laporan/jadwal-harian/cetak .................................................. laporan.jadwal.cetak ΓÇ║ LaporanController@cetak
  GET|HEAD        login .................................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST            login ............................................................................. Auth\AuthenticatedSessionController@store
  POST            logout ................................................................. logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  PUT             password ................................................................... password.update ΓÇ║ Auth\PasswordController@update
  PUT|PATCH       penyiar/items/{item} ............................................. penyiar.items.update ΓÇ║ Admin\SequenceItemController@update
  DELETE          penyiar/items/{item} ........................................... penyiar.items.destroy ΓÇ║ Admin\SequenceItemController@destroy
  GET|HEAD        penyiar/items/{item}/edit ............................................ penyiar.items.edit ΓÇ║ Admin\SequenceItemController@edit
  GET|HEAD        penyiar/items/{item}/item-details ....................... penyiar.items.item-details.manage ΓÇ║ Admin\ItemDetailController@edit
  PUT             penyiar/items/{item}/item-details ................. penyiar.items.item-details.update-all ΓÇ║ Admin\ItemDetailController@update
  GET|HEAD        penyiar/items/{item}/materi-details ................. penyiar.items.materi-details.manage ΓÇ║ Admin\MateriDetailController@edit
  PUT             penyiar/items/{item}/materi-details ........... penyiar.items.materi-details.update-all ΓÇ║ Admin\MateriDetailController@update
  GET|HEAD        penyiar/jadwal ........................................................ penyiar.jadwal.index ΓÇ║ Penyiar\JadwalController@index
  GET|HEAD        penyiar/sequences/{sequence}/items ....................... penyiar.sequences.items.index ΓÇ║ Admin\SequenceItemController@index
  POST            penyiar/sequences/{sequence}/items ....................... penyiar.sequences.items.store ΓÇ║ Admin\SequenceItemController@store
  GET|HEAD        penyiar/sequences/{sequence}/items/create .............. penyiar.sequences.items.create ΓÇ║ Admin\SequenceItemController@create
  PATCH           penyiar/sequences/{sequence}/pendengar ........ penyiar.sequences.pendengar.update ΓÇ║ Admin\SequenceController@updatePendengar
  GET|HEAD        profile ............................................................................... profile.edit ΓÇ║ ProfileController@edit
  PATCH           profile ........................................................................... profile.update ΓÇ║ ProfileController@update
  DELETE          profile ......................................................................... profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD        register .................................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST            register ................................................................................ Auth\RegisteredUserController@store
  POST            reset-password ............................................................ password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD        reset-password/{token} ................................................... password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD        storage/{path} ................................................................................................ storage.local
  GET|HEAD        up .......................................................................................................................... 
  GET|HEAD        verify-email ................................................... verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD        verify-email/{id}/{hash} ................................................... verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                                            Showing [86] routes

```


## Controllers Content
```
===== app\Http\Controllers\Admin\ItemDetailController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SequenceItem;
use App\Models\ItemDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;

class ItemDetailController extends Controller
{
    private function authorizePenyiar(SequenceItem $item)
    {
        if (Auth::user()->role === 'penyiar' && $item->sequence->host_id != Auth::id()) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
        }
    }

    public function edit(SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $item->load('itemDetails');
        return view('admin.item-details.manage', compact('item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $request->validate(['details' => 'nullable|array', 'details.*.jenis' => ['required', Rule::in(['ilm', 'spot', 'filler'])], 'details.*.isi' => 'required|string|max:255']);

        try {
            DB::transaction(function () use ($request, $item) {
                $item->itemDetails()->delete();
                if ($request->has('details')) {
                    $details = collect($request->details)->filter(fn($detail) => !empty($detail['isi']))->map(fn($detail) => ['jenis' => $detail['jenis'], 'isi' => $detail['isi'], 'dibuat_oleh' => Auth::id(), 'created_at' => now(), 'updated_at' => now()]);
                    if ($details->isNotEmpty()) {
                        $item->itemDetails()->createMany($details->all());
                    }
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan item detail: ' . $e->getMessage());
        }

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.items.item-details.manage' : 'penyiar.items.item-details.manage';
        return redirect()->route($redirectRoute, $item)->with('success', 'ILM, Spot, & Filler berhasil diperbarui.');
    }
}

===== app\Http\Controllers\Admin\JadwalPetugasController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\JadwalPetugas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JadwalPetugasController extends Controller
{
    public function index(Program $program)
    {
        $jadwalPetugas = $program->jadwalPetugas()->with('penyiars')->orderBy('tanggal', 'desc')->paginate(15);
        return view('admin.petugas.index', compact('program', 'jadwalPetugas'));
    }

    public function create(Program $program)
    {
        $penyiars = User::where('role', 'penyiar')->orderBy('name')->get();
        return view('admin.petugas.create', compact('program', 'penyiars'));
    }

    public function store(Request $request, Program $program)
    {
        $validatedData = $request->validate([
            'tanggal' => [
                'required', 'date',
                Rule::unique('jadwal_petugas')->where(fn ($query) => $query->where('program_id', $program->id)),
            ],
            'produser_nama' => 'nullable|string|max:255',
            'pengelola_pep_nama' => 'nullable|string|max:255',
            'pengarah_acara_nama' => 'nullable|string|max:255',
            'petugas_lpu_nama' => 'nullable|string|max:255',
            'penyiars' => 'nullable|array',
            'penyiars.*' => 'exists:users,id',
        ], ['tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.']);

        $jadwalPetugas = $program->jadwalPetugas()->create($validatedData + ['dibuat_oleh' => Auth::id()]);
        $jadwalPetugas->penyiars()->sync($request->input('penyiars', []));

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil ditambahkan.');
    }

    public function edit(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $penyiars = User::where('role', 'penyiar')->orderBy('name')->get();
        $jadwalPetugas->load('penyiars');
        return view('admin.petugas.edit', compact('program', 'jadwalPetugas', 'penyiars'));
    }

    public function update(Request $request, Program $program, JadwalPetugas $jadwalPetugas)
    {
        $validatedData = $request->validate([
            'tanggal' => [
                'required', 'date',
                Rule::unique('jadwal_petugas')->where(fn ($query) => $query->where('program_id', $program->id))->ignore($jadwalPetugas->id),
            ],
            'produser_nama' => 'nullable|string|max:255',
            'pengelola_pep_nama' => 'nullable|string|max:255',
            'pengarah_acara_nama' => 'nullable|string|max:255',
            'petugas_lpu_nama' => 'nullable|string|max:255',
            'penyiars' => 'nullable|array',
            'penyiars.*' => 'exists:users,id',
        ], ['tanggal.unique' => 'Jadwal petugas untuk program ini di tanggal tersebut sudah ada.']);
        
        $jadwalPetugas->update($validatedData);
        $jadwalPetugas->penyiars()->sync($request->input('penyiars', []));
        // AKHIR MODIFIKASI

        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil diperbarui.');
    }

    public function destroy(Program $program, JadwalPetugas $jadwalPetugas)
    {
        $jadwalPetugas->delete();
        return redirect()->route('admin.programs.petugas.index', $program)
            ->with('success', 'Jadwal petugas berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\MateriDetailController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SequenceItem;
use App\Models\MateriDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class MateriDetailController extends Controller
{/**

     * Show the form for editing all details for an item.
     */
    private function authorizePenyiar(SequenceItem $item)
    {
        if (Auth::user()->role === 'penyiar' && $item->sequence->host_id != Auth::id()) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
        }
    }

    public function edit(SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $item->load('materiDetails');
        return view('admin.materi-details.manage', compact('item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $request->validate(['details' => 'nullable|array', 'details.*' => 'nullable|string|max:255']);

        try {
            DB::transaction(function () use ($request, $item) {
                $item->materiDetails()->delete();
                if ($request->has('details')) {
                    $details = collect($request->details)->filter()->map(function ($isi) {
                        return ['isi' => $isi, 'dibuat_oleh' => Auth::id(), 'created_at' => now(), 'updated_at' => now()];
                    });
                    if ($details->isNotEmpty()) {
                        $item->materiDetails()->createMany($details->all());
                    }
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan detail materi: ' . $e->getMessage());
        }

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.items.materi-details.manage' : 'penyiar.items.materi-details.manage';
        return redirect()->route($redirectRoute, $item)->with('success', 'Sub-list materi berhasil diperbarui.');
    }
}

===== app\Http\Controllers\Admin\ProgramController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
use App\Models\Studio;

class ProgramController extends Controller
{public function index()
    {
        $programs = Program::with('pembuat')->latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
    }

    public function create() {
        $studios = Studio::orderBy('nama')->get(); // TAMBAHAN
        return view('admin.programs.create', compact('studios'));
    }
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'studio_id' => 'required|exists:studios,id', // TAMBAHAN
        ]);
        Program::create($request->all() + ['dibuat_oleh' => Auth::id()]);
        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        // Redirect to sequence index for this program
        return redirect()->route('admin.programs.sequences.index', $program);
    }

    public function edit(Program $program) {
        $studios = Studio::orderBy('nama')->get(); // TAMBAHAN
        return view('admin.programs.edit', compact('program', 'studios'));
    }
    public function update(Request $request, Program $program) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'studio_id' => 'required|exists:studios,id', // TAMBAHAN
        ]);
        $program->update($request->all());
        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('admin.programs.index')
            ->with('success', 'Program siaran berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\SequenceController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Sequence;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SequenceController extends Controller
{
    public function index(Program $program)
    {
        $sequences = $program->sequences()->with('host')->latest()->paginate(10);
        return view('admin.sequences.index', compact('program', 'sequences'));
    }

    public function create(Program $program)
    {
        $penyiars = User::where('role', 'penyiar')->get();
        return view('admin.sequences.create', compact('program', 'penyiars'));
    }

    public function store(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'waktu' => 'required|date_format:H:i',
            'host_id' => 'required|exists:users,id',
            'frame' => 'nullable|string|max:255',
            'durasi' => 'nullable|numeric|min:0',
        ]);

        $program->sequences()->create($request->all() + ['dibuat_oleh' => Auth::id()]);

        return redirect()->route('admin.programs.sequences.index', $program)
            ->with('success', 'Sequence berhasil ditambahkan.');
    }

    // AWAL MODIFIKASI
    public function edit(Sequence $sequence)
    {
        $program = $sequence->program;
        $penyiars = User::where('role', 'penyiar')->get();
        return view('admin.sequences.edit', compact('program', 'sequence', 'penyiars'));
    }

    public function update(Request $request, Sequence $sequence)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'waktu' => 'required|date_format:H:i',
            'host_id' => 'required|exists:users,id',
            'frame' => 'nullable|string|max:255',
            'durasi' => 'nullable|numeric|min:0',
        ]);

        $sequence->update($request->all());

        return redirect()->route('admin.programs.sequences.index', $sequence->program_id)
            ->with('success', 'Sequence berhasil diperbarui.');
    }

    public function updatePendengar(Request $request, Sequence $sequence)
    {
        // Otorisasi: hanya host dari sequence ini yang boleh update
        if (Auth::user()->role === 'penyiar' && $sequence->host_id != Auth::id()) {
            abort(403, 'AKSES DITOLAK.');
        }

        $request->validate([
            'jumlah_pendengar' => 'required|integer|min:0',
        ]);

        $sequence->update([
            'jumlah_pendengar' => $request->jumlah_pendengar,
        ]);

        return back()->with('success', 'Jumlah pendengar berhasil disimpan.');
    }

    public function destroy(Sequence $sequence)
    {
        $program = $sequence->program;
        $sequence->delete();

        return redirect()->route('admin.programs.sequences.index', $program)
            ->with('success', 'Sequence berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\SequenceItemController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sequence;
use App\Models\SequenceItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SequenceItemController extends Controller
{
    private function authorizePenyiar(Sequence $sequence)
    {
        if (Auth::user()->role === 'penyiar' && $sequence->host_id != Auth::id()) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES KE JADWAL INI.');
        }
    }

    public function index(Sequence $sequence)
    {
        $this->authorizePenyiar($sequence);
        $program = $sequence->program;
        $items = $sequence->items()->latest()->paginate(10);
        return view('admin.items.index', compact('program', 'sequence', 'items'));
    }

    public function create(Sequence $sequence)
    {
        $this->authorizePenyiar($sequence);
        $program = $sequence->program;
        return view('admin.items.create', compact('program', 'sequence'));
    }

    public function store(Request $request, Sequence $sequence)
    {
        $this->authorizePenyiar($sequence);
        $request->validate(['materi' => 'required|string|max:255', 'frame' => 'nullable|string|max:255', 'durasi' => 'nullable|numeric|min:0', 'keterangan' => 'nullable|string',]);
        $sequence->items()->create($request->all() + ['dibuat_oleh' => Auth::id()]);
        
        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.index' : 'penyiar.sequences.items.index';
        return redirect()->route($redirectRoute, $sequence)->with('success', 'Materi siar berhasil ditambahkan.');
    }

    public function edit(SequenceItem $item)
    {
        $this->authorizePenyiar($item->sequence);
        $sequence = $item->sequence;
        $program = $sequence->program;
        return view('admin.items.edit', compact('program', 'sequence', 'item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $this->authorizePenyiar($item->sequence);
        $request->validate(['materi' => 'required|string|max:255', 'frame' => 'nullable|string|max:255', 'durasi' => 'nullable|numeric|min:0', 'keterangan' => 'nullable|string',]);
        $item->update($request->all());

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.index' : 'penyiar.sequences.items.index';
        return redirect()->route($redirectRoute, $item->sequence_id)->with('success', 'Materi siar berhasil diperbarui.');
    }

    public function destroy(SequenceItem $item)
    {
        $this->authorizePenyiar($item->sequence);
        $sequence = $item->sequence;
        $item->delete();

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.index' : 'penyiar.sequences.items.index';
        return redirect()->route($redirectRoute, $sequence)->with('success', 'Materi siar berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\StudioController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studio;

class StudioController extends Controller
{
    public function index()
    {
        $studios = Studio::latest()->paginate(10);
        return view('admin.studios.index', compact('studios'));
    }

    public function create()
    {
        return view('admin.studios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:studios,nama',
            'deskripsi' => 'nullable|string',
        ]);
        Studio::create($request->all());
        return redirect()->route('admin.studios.index')->with('success', 'Studio berhasil ditambahkan.');
    }

    public function edit(Studio $studio)
    {
        return view('admin.studios.edit', compact('studio'));
    }

    public function update(Request $request, Studio $studio)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:studios,nama,' . $studio->id,
            'deskripsi' => 'nullable|string',
        ]);
        $studio->update($request->all());
        return redirect()->route('admin.studios.index')->with('success', 'Studio berhasil diperbarui.');
    }

    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect()->route('admin.studios.index')->with('success', 'Studio berhasil dihapus.');
    }
}

===== app\Http\Controllers\Admin\UserController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', Rule::in(['admin', 'penyiar', 'katim', 'kepsta'])],
        ]);

        $data = $request->except('password');
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        if ($user->id === Auth::user()->id) {
            return redirect()->route('admin.users.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
    }
}

===== app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

===== app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

===== app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
    }
}

===== app\Http\Controllers\Auth\NewPasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\PasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}

===== app\Http\Controllers\Auth\PasswordResetLinkController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\RegisteredUserController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\VerifyEmailController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}

===== app\Http\Controllers\Penyiar\JadwalController.php =====
<?php

namespace App\Http\Controllers\Penyiar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sequence;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    /**
     * Menampilkan daftar sequence yang ditugaskan untuk penyiar yang sedang login.
     */
    public function index()
    {
        $sequences = Sequence::with('program.studio')

            ->where('host_id', Auth::id())
            ->orderBy('waktu', 'asc')
            ->paginate(15);

        return view('penyiar.jadwal.index', compact('sequences'));
    }
}

===== app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

===== app\Http\Controllers\DashboardController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Program;
use App\Models\Sequence;
use App\Models\Studio;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $viewData = [];

        switch ($user->role) {
            case 'admin':
                $viewData = [
                    'totalUsers' => User::count(),
                    'totalPrograms' => Program::count(),
                    'totalSequences' => Sequence::count(),
                    'totalStudios' => Studio::count(),
                ];
                break;

            case 'penyiar':
                // Menampilkan 5 sequence terdekat yang ditugaskan padanya
                $viewData = [
                    'jadwalTerdekat' => Sequence::with('program')
                        ->where('host_id', $user->id)
                        ->orderBy('waktu', 'asc')
                        ->take(5)
                        ->get(),
                ];
                break;

            case 'katim':
            case 'kepsta':
                // Tidak perlu data khusus, hanya tampilan berbeda
                break;
        }

        return view('dashboard', $viewData);
    }
}

===== app\Http\Controllers\LaporanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\JadwalPetugas;
use Carbon\Carbon;
use App\Models\Sequence;
use App\Models\Studio;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate(['tanggal' => 'nullable|date_format:Y-m-d']);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();

        // Ambil program yang terjadwal hari itu, lalu kelompokkan berdasarkan studio
        $programs = Program::with([
                'studio',
                'sequences' => fn($q) => $q->orderBy('waktu', 'asc'),
                'sequences.host', 
                'sequences.items' => fn($q) => $q->orderBy('id', 'asc'),
                'sequences.items.materiDetails', 
                'sequences.items.itemDetails'
            ])
            ->whereHas('jadwalPetugas', fn($q) => $q->whereDate('tanggal', $tanggal))
            ->get()
            ->sortBy('sequences.0.waktu');
        
        $jadwalPerStudio = $programs->groupBy('studio.nama');
        $studios = Studio::whereIn('id', $programs->pluck('studio_id')->unique())->orderBy('nama')->get();
        
        $jadwalPetugas = JadwalPetugas::with('penyiars')
            ->whereDate('tanggal', $tanggal)
            ->get()->keyBy('program_id');

        return view('laporan.jadwal', compact('studios', 'jadwalPerStudio', 'jadwalPetugas', 'tanggal'));
    }

    public function cetak(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'nullable|date_format:Y-m-d',
            'program' => 'nullable|exists:programs,id'
        ]);
        $tanggal = Carbon::parse($validated['tanggal'] ?? now())->startOfDay();
        
        $programQuery = Program::query();

        if (isset($validated['program'])) {
            $programQuery->where('id', $validated['program']);
        }

        $programs = $programQuery->with([
            'sequences' => fn ($q) => $q->orderBy('waktu', 'asc'),
            'sequences.host', 
            'sequences.items' => fn ($q) => $q->orderBy('id', 'asc'),
            'sequences.items.materiDetails', 
            'sequences.items.itemDetails'
        ])
        ->whereHas('jadwalPetugas', fn ($q) => $q->whereDate('tanggal', $tanggal))
        ->get();
        
        $jadwalPetugas = JadwalPetugas::with('penyiars')
            ->whereDate('tanggal', $tanggal)
            ->get()->keyBy('program_id');
        
        return view('laporan.jadwal_print', compact('programs', 'jadwalPetugas', 'tanggal'));
    }


}

===== app\Http\Controllers\ProfileController.php =====
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

```


## Models Content
```
===== app\Models\ItemDetail.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'jenis',
        'isi',
        'dibuat_oleh',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(SequenceItem::class, 'item_id');
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}

===== app\Models\JadwalPetugas.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JadwalPetugas extends Model
{
    use HasFactory;

    protected $table = 'jadwal_petugas';

    protected $fillable = [
        'tanggal',
        'program_id',
        'produser_nama',
        'pengelola_pep_nama',
        'pengarah_acara_nama',
        'petugas_lpu_nama',
        'dibuat_oleh',
    ];  

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
    
    public function penyiars(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'jadwal_penyiar', 'jadwal_petugas_id', 'penyiar_id');
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}

===== app\Models\MateriDetail.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class MateriDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'isi',
        'dibuat_oleh',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(SequenceItem::class, 'item_id');
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}

===== app\Models\Program.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alias',
        'deskripsi',
        'dibuat_oleh',
        'studio_id',
    ];

    public function studio(): BelongsTo
    {
        return $this->belongsTo(Studio::class);
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function sequences(): HasMany
    {
        return $this->hasMany(Sequence::class);
    }

    public function jadwalPetugas(): HasMany
    {
        return $this->hasMany(JadwalPetugas::class);
    }
}

===== app\Models\Sequence.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sequence extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'nama',
        'waktu',
        'host_id',
        'frame',
        'durasi',
        'dibuat_oleh',
        'jumlah_pendengar',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function host(): BelongsTo
    {
        return $this->belongsTo(User::class, 'host_id');
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function items(): HasMany
    {
        return $this->hasMany(SequenceItem::class);
    }   
}

===== app\Models\SequenceItem.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SequenceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'sequence_id',
        'materi',
        'frame',
        'durasi',
        'keterangan',
        'dibuat_oleh',
    ];

    public function sequence(): BelongsTo
    {
        return $this->belongsTo(Sequence::class);
    }

    public function pembuat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function materiDetails(): HasMany
    {
        return $this->hasMany(MateriDetail::class, 'item_id');
    }

    public function itemDetails(): HasMany
    {
        return $this->hasMany(ItemDetail::class, 'item_id');
    }
}

===== app\Models\Studio.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi'];

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}

```


## Views & UI Files Content
```
===== resources\views\admin\item-details\manage.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola ILM, Spot, Filler untuk: 
            <span class="font-bold text-indigo-700">{{ $item->materi }}</span>
        </h2>
    </x-slot>

    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-6">
                    
                    {{-- Tombol kembali --}}
                    <div class="mb-4">
                        <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" 
                           class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
                                  text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
                                  transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Kembali ke Daftar Materi
                        </a>
                    </div>

                    {{-- Alert --}}
                    @if (session('success'))
                        <div class="rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                            âœ… {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="rounded-md bg-red-50 border border-red-200 text-red-800 px-4 py-3 text-sm">
                            âš ï¸ {{ session('error') }}
                        </div>
                    @endif

                    {{-- Form --}}
                    <form method="POST" action="{{ route($prefix.'items.item-details.update-all', $item) }}"
                          x-data="{ details: {{ json_encode($item->itemDetails->map->only(['jenis', 'isi'])) }} }">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <template x-for="(detail, index) in details" :key="index">
                                <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-md border border-gray-200">
                                    <div class="w-1/4">
                                        <select :name="'details[' + index + '][jenis]'" x-model="detail.jenis"
                                                class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                            <option value="ilm">ILM</option>
                                            <option value="spot">Spot</option>
                                            <option value="filler">Filler</option>
                                        </select>
                                    </div>
                                    <div class="flex-1">
                                        <input type="text"
                                               :name="'details[' + index + '][isi]'"
                                               x-model="detail.isi"
                                               class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                               placeholder="Isi ILM, Spot, atau Filler...">
                                    </div>
                                    <button type="button" @click="details.splice(index, 1)"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <div class="mt-5">
                            <button type="button" @click="details.push({ jenis: 'ilm', isi: '' })"
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                                + Tambah Baris
                            </button>
                        </div>

                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}"
                               class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
                                      text-gray-600 bg-gray-100 hover:bg-gray-200 hover:text-gray-800 
                                      transition-all duration-300 mr-3">
                                Batal
                            </a>
                            <x-primary-button>
                                Simpan Perubahan
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\items\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Materi Siar untuk Sequence: <span class="font-bold">{{ $sequence->nama }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
                    <form method="POST" action="{{ route($prefix.'sequences.items.store', $sequence) }}">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="materi" :value="__('Materi Siar')" />
                                <x-text-input id="materi" class="block mt-1 w-full" type="text" name="materi" :value="old('materi')" required autofocus />
                                <x-input-error :messages="$errors->get('materi')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi')" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="frame" :value="__('Frame (Opsional override)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame')" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="keterangan" :value="__('Keterangan')" />
                                <textarea id="keterangan" name="keterangan" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('keterangan') }}</textarea>
                                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route($prefix.'sequences.items.index', $sequence) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\items\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Materi Siar: <span class="font-bold">{{ $item->materi }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
                    {{-- AWAL MODIFIKASI --}}
                    <form method="POST" action="{{ route($prefix.'items.update', $item) }}">
                    {{-- AKHIR MODIFIKASI --}}
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="materi" :value="__('Materi Siar')" />
                                <x-text-input id="materi" class="block mt-1 w-full" type="text" name="materi" :value="old('materi', $item->materi)" required autofocus />
                                <x-input-error :messages="$errors->get('materi')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi', $item->durasi)" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="frame" :value="__('Frame (Opsional override)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame', $item->frame)" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="keterangan" :value="__('Keterangan')" />
                                <textarea id="keterangan" name="keterangan" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('keterangan', $item->keterangan) }}</textarea>
                                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            {{-- AWAL MODIFIKASI --}}
                            <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            {{-- AKHIR MODIFIKASI --}}
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\items\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            

            @php 
                $createRoute = Auth::user()->role === 'admin' 
                    ? 'admin.sequences.items.create' 
                    : 'penyiar.sequences.items.create'; 
            @endphp
            <a href="{{ route($createRoute, $sequence) }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      rounded-lg font-semibold text-sm text-white shadow hover:shadow-md 
                      hover:from-blue-700 hover:to-sky-600 transition">
                + Tambah Materi
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        @if (Auth::user()->role === 'admin')
                            <a href="{{ route('admin.programs.sequences.index', ['program' => $sequence->program_id]) }}" 
                               class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-indigo-600 
                                      bg-indigo-50 rounded-lg hover:bg-indigo-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 19l-7-7 7-7"/>
                                </svg>
                                Kembali ke Daftar Seqmen
                            </a>
                        @else
                            <a href="{{ route('penyiar.jadwal.index') }}" 
                               class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-indigo-600 
                                      bg-indigo-50 rounded-lg hover:bg-indigo-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 19l-7-7 7-7"/>
                                </svg>
                                Kembali ke Jadwal Saya
                            </a>
                        @endif
                    </div>
                    

                    <!-- Flash message -->
                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left">Materi</th>
                                    <th class="px-4 py-3 font-semibold text-left">Frame</th>
                                    <th class="px-4 py-3 font-semibold text-left">Durasi (Menit)</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($items as $item)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $item->materi }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $item->frame ?? '-' }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $item->durasi ?? '-' }}</td>
                                    <td class="px-4 py-3">
                                        @php 
                                            $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; 
                                        @endphp
                                        <div class="flex flex-wrap gap-2">
                                            <!-- Sub-List -->
                                            <a href="{{ route($prefix . 'items.materi-details.manage', $item) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full 
                                                      bg-green-100 text-green-700 hover:bg-green-200 transition">
                                                ðŸ“‚ Sub-List
                                            </a>

                                            <!-- ILM/Spot -->
                                            <a href="{{ route($prefix . 'items.item-details.manage', $item) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full 
                                                      bg-purple-100 text-purple-700 hover:bg-purple-200 transition">
                                                ðŸŽ™ï¸ ILM/Spot
                                            </a>

                                            <!-- Edit -->
                                            <a href="{{ route($prefix . 'items.edit', $item) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full 
                                                      bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                âœï¸ Edit
                                            </a>

                                            <!-- Hapus -->
                                            <form action="{{ route($prefix . 'items.destroy', $item) }}" method="POST" 
                                                  onsubmit="return confirm('Anda yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="px-3 py-1 text-xs font-medium rounded-full 
                                                               bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                    ðŸ—‘ï¸ Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-6 text-gray-500">
                                        Belum ada materi siar untuk sequence ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\materi-details\manage.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Sub-List untuk Materi:
                <span class="font-bold text-blue-700">{{ $item->materi }}</span>
            </h2>


        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
                    <a href="{{ route($prefix . 'sequences.items.index', $item->sequence_id) }}"
                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-indigo-600 
          bg-indigo-50 rounded-lg hover:bg-indigo-100 transition mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali ke Daftar Materi
                    </a>

                    <!-- Flash messages -->
                    @if (session('success'))
                        <div
                            class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('error'))
                        <div
                            class="flex items-center gap-3 bg-red-50 border border-red-200 
                                    text-red-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    <!-- Form dinamis Alpine -->
                    <form method="POST" action="{{ route($prefix . 'items.materi-details.update-all', $item) }}"
                        x-data="{ details: {{ json_encode($item->materiDetails->pluck('isi')->all()) }} }">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <template x-for="(detail, index) in details" :key="index">
                                <div class="flex items-center gap-3 bg-gray-50 px-4 py-2 rounded-lg shadow-sm">
                                    <span x-text="index + 1" class="text-gray-500 font-semibold w-6 text-center"></span>
                                    <input type="text" name="details[]" x-model="details[index]"
                                        class="flex-1 border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                                        placeholder="Isi detail materi...">
                                    <button type="button" @click="details.splice(index, 1)"
                                        class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <!-- Add new row -->
                        <div class="mt-6">
                            <button type="button" @click="details.push('')"
                                class="inline-flex items-center gap-2 px-3 py-1.5 text-sm 
                                           font-medium text-blue-600 bg-blue-50 rounded-lg 
                                           hover:bg-blue-100 transition">
                                + Tambah Baris
                            </button>
                        </div>

                        <!-- Footer actions -->
                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route($prefix . 'sequences.items.index', $item->sequence_id) }}"
                                class="text-sm text-gray-600 hover:text-gray-900 mr-4 transition">
                                Batal
                            </a>
                            <x-primary-button class="px-5 py-2">
                                Simpan Perubahan
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\petugas\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Jadwal Petugas untuk: <span class="font-bold">{{ $program->nama }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.programs.petugas.store', $program) }}">
                        @csrf
                        @include('admin.petugas._form', ['jadwalPetugas' => new \App\Models\JadwalPetugas()])
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.petugas.index', $program) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\petugas\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Jadwal Petugas untuk: <span class="font-bold">{{ $program->nama }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.programs.petugas.update', [$program, $jadwalPetugas]) }}">
                        @csrf
                        @method('PUT')
                        @include('admin.petugas._form')
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.petugas.index', $program) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\petugas\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Petugas Harian untuk:
                <span class="font-bold text-indigo-700">{{ $program->nama }}</span>
            </h2>

            {{-- Tombol Tambah Jadwal --}}
            <a href="{{ route('admin.programs.petugas.create', $program) }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md 
                       font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Jadwal Petugas
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">

                    {{-- ðŸ”™ Kembali ke daftar program --}}
                    <a href="{{ route('admin.programs.index') }}"
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
          text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
          transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali ke Daftar Program
                    </a>



                    {{-- Pesan sukses --}}
                    @if (session('success'))
                        <div class="rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                            âœ… {{ session('success') }}
                        </div>
                    @endif

                    {{-- ðŸ“‹ Tabel Jadwal --}}
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full text-sm text-gray-700">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">Tanggal</th>
                                    <th class="px-4 py-3 text-left font-semibold">Produser</th>
                                    <th class="px-4 py-3 text-left font-semibold">Pengarah Acara</th>
                                    <th class="px-4 py-3 text-center font-semibold w-32">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($jadwalPetugas as $petugas)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-3 font-medium text-gray-900">
                                            {{ \Carbon\Carbon::parse($petugas->tanggal)->isoFormat('dddd, D MMMM Y') }}
                                        </td>
                                        <td class="px-4 py-3 text-gray-700">{{ $petugas->produser_nama ?? '-' }}</td>
                                        <td class="px-4 py-3 text-gray-700">{{ $petugas->pengarah_acara_nama ?? '-' }}
                                        </td>
                                        <td class="px-4 py-3 text-center">
                                            <div class="flex justify-center gap-3">
                                                <a href="{{ route('admin.programs.petugas.edit', [$program, $petugas]) }}"
                                                    class="inline-flex items-center px-3 py-1.5 text-xs font-medium rounded-md 
                                                           bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                    âœï¸ Edit
                                                </a>
                                                <form
                                                    action="{{ route('admin.programs.petugas.destroy', [$program, $petugas]) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus jadwal ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center px-3 py-1.5 text-xs font-medium rounded-md 
                                                                   bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                        ðŸ—‘ï¸ Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-6 text-gray-500">
                                            Belum ada jadwal petugas untuk program ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $jadwalPetugas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\petugas\_form.blade.php =====
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <x-input-label for="tanggal" :value="__('Tanggal')" />
        <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="old('tanggal', $jadwalPetugas->tanggal ?? '')" required />
        <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 pt-6 border-t">
    <div>
        <x-input-label for="produser_nama" value="Produser" />
        <x-text-input id="produser_nama" class="block mt-1 w-full" type="text" name="produser_nama" :value="old('produser_nama', $jadwalPetugas->produser_nama ?? '')" />
        <x-input-error :messages="$errors->get('produser_nama')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="pengelola_pep_nama" value="Pengelola PEP" />
        <x-text-input id="pengelola_pep_nama" class="block mt-1 w-full" type="text" name="pengelola_pep_nama" :value="old('pengelola_pep_nama', $jadwalPetugas->pengelola_pep_nama ?? '')" />
        <x-input-error :messages="$errors->get('pengelola_pep_nama')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="pengarah_acara_nama" value="Pengarah Acara" />
        <x-text-input id="pengarah_acara_nama" class="block mt-1 w-full" type="text" name="pengarah_acara_nama" :value="old('pengarah_acara_nama', $jadwalPetugas->pengarah_acara_nama ?? '')" />
        <x-input-error :messages="$errors->get('pengarah_acara_nama')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="petugas_lpu_nama" value="Petugas LPU" />
        <x-text-input id="petugas_lpu_nama" class="block mt-1 w-full" type="text" name="petugas_lpu_nama" :value="old('petugas_lpu_nama', $jadwalPetugas->petugas_lpu_nama ?? '')" />
        <x-input-error :messages="$errors->get('petugas_lpu_nama')" class="mt-2" />
    </div>
    <div class="md:col-span-2">
        <x-input-label for="penyiars" value="Penyiar Bertugas" />
        <select id="penyiars" name="penyiars[]" multiple class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            @php
                $selectedPenyiars = old('penyiars', $jadwalPetugas->penyiars->pluck('id')->all() ?? []);
            @endphp
            @foreach($penyiars as $penyiar)
                <option value="{{ $penyiar->id }}" @selected(in_array($penyiar->id, $selectedPenyiars))>
                    {{ $penyiar->name }}
                </option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('penyiars')" class="mt-2" />
    </div>
</div>

===== resources\views\admin\programs\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Program Siaran Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.programs.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="nama" :value="__('Nama Program')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="alias" :value="__('Alias (Singkatan)')" />
                                <x-text-input id="alias" class="block mt-1 w-full" type="text" name="alias" :value="old('alias')" />
                                <x-input-error :messages="$errors->get('alias')" class="mt-2" />
                            </div>
                            <div class="md:col-span-2">
                                <x-input-label for="studio_id" value="Studio" />
                                <select id="studio_id" name="studio_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Studio --</option>
                                    @foreach($studios as $studio)
                                        <option value="{{ $studio->id }}" @selected(old('studio_id', $program->studio_id ?? '') == $studio->id)>
                                            {{ $studio->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('studio_id')" class="mt-2" />
                            </div>

                             <div class="md:col-span-2">
                                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                                <textarea id="deskripsi" name="deskripsi" rows="4" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('deskripsi') }}</textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\programs\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Program Siaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.programs.update', $program) }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="nama" :value="__('Nama Program')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama', $program->nama)" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="alias" :value="__('Alias (Singkatan)')" />
                                <x-text-input id="alias" class="block mt-1 w-full" type="text" name="alias" :value="old('alias', $program->alias)" />
                                <x-input-error :messages="$errors->get('alias')" class="mt-2" />
                            </div>

                            {{-- TAMBAHAN DROPDOWN STUDIO --}}
                            <div class="md:col-span-2">
                                <x-input-label for="studio_id" value="Studio" />
                                <select id="studio_id" name="studio_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Studio --</option>
                                    @foreach($studios as $studio)
                                        <option value="{{ $studio->id }}" @selected(old('studio_id', $program->studio_id) == $studio->id)>
                                            {{ $studio->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('studio_id')" class="mt-2" />
                            </div>

                             <div class="md:col-span-2">
                                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                                <textarea id="deskripsi" name="deskripsi" rows="4" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('deskripsi', $program->deskripsi) }}</textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\programs\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Program Siaran') }}
            </h2>
            <a href="{{ route('admin.programs.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Program
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">No</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Studio</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Nama Program</th>
                                    {{-- <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Alias</th> --}}
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Dibuat Oleh</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Tanggal Dibuat</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($programs as $program)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-600">{{ $loop->iteration + $programs->firstItem() - 1 }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $program->studio->nama }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $program->nama }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-600">{{ $program->pembuat->name ?? 'N/A' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-600">{{ $program->created_at->format('d M Y, H:i') }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        <div class="flex gap-2">
                                            <a href="{{ route('admin.programs.petugas.index', $program) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700 hover:bg-green-200">
                                                Petugas
                                            </a>
                                            <a href="{{ route('admin.programs.sequences.index', $program) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full bg-indigo-100 text-indigo-700 hover:bg-indigo-200">
                                                Kelola Seqmen
                                            </a>
                                            <a href="{{ route('admin.programs.edit', $program) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" 
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini? Semua sequence di dalamnya juga akan terhapus.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700 hover:bg-red-200">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-500">
                                        Tidak ada data program siaran.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $programs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\sequences\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Sequence untuk: <span class="font-bold">{{ $program->nama }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.programs.sequences.store', $program) }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="nama" :value="__('Nama Sequence')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="host_id" :value="__('Host/Penyiar')" />
                                <select id="host_id" name="host_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="">Pilih Penyiar</option>
                                    @foreach ($penyiars as $penyiar)
                                        <option value="{{ $penyiar->id }}" {{ old('host_id') == $penyiar->id ? 'selected' : '' }}>
                                            {{ $penyiar->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('host_id')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="waktu" :value="__('Waktu Mulai (HH:MM)')" />
                                <x-text-input id="waktu" class="block mt-1 w-full" type="time" name="waktu" :value="old('waktu')" required />
                                <x-input-error :messages="$errors->get('waktu')" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi')" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div>
                            
                            <div class="md:col-span-2">
                                <x-input-label for="frame" :value="__('Frame (Live/Rekam/dll.)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame')" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.sequences.index', $program) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\sequences\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Sequence: {{ $sequence->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.sequences.update', $sequence) }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="nama" :value="__('Nama Sequence')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama', $sequence->nama)" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="host_id" :value="__('Host/Penyiar')" />
                                <select id="host_id" name="host_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="">Pilih Penyiar</option>
                                    @foreach ($penyiars as $penyiar)
                                        <option value="{{ $penyiar->id }}" @selected(old('host_id', $sequence->host_id) == $penyiar->id)>
                                            {{ $penyiar->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('host_id')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="waktu" :value="__('Waktu Mulai (HH:MM)')" />
                                <x-text-input id="waktu" class="block mt-1 w-full" type="time" name="waktu" :value="old('waktu', \Carbon\Carbon::parse($sequence->waktu)->format('H:i'))" required />
                                <x-input-error :messages="$errors->get('waktu')" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi', $sequence->durasi)" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div>
                            
                            <div class="md:col-span-2">
                                <x-input-label for="frame" :value="__('Frame (Live/Rekam/dll.)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame', $sequence->frame)" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.sequences.index', $sequence->program_id) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\sequences\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <a href="{{ route('admin.programs.sequences.create', $program) }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Seqmen
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Back button -->
                    <div class="mb-6">
                        <a href="{{ route('admin.programs.index') }}" 
                           class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
                                  text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
                                  transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Kembali ke Daftar Program
                        </a>
                    </div>
                
                    <!-- Flash message -->
                    @if (session('success'))
                        <div x-data="{ show: true }" 
                             x-show="show" 
                             x-transition 
                             class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                            <button @click="show = false" class="ml-auto text-green-600 hover:text-green-800">
                                âœ•
                            </button>
                        </div>
                    @endif
                
                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left">Nama Seqmen</th>
                                    <th class="px-4 py-3 font-semibold text-left">Waktu</th>
                                    <th class="px-4 py-3 font-semibold text-left">Host/Penyiar</th>
                                    <th class="px-4 py-3 font-semibold text-left">Durasi (Menit)</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($sequences as $sequence)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $sequence->nama }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $sequence->host->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $sequence->durasi ?? '-' }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex flex-wrap gap-2">
                                            <!-- Isi Materi -->
                                            <a href="{{ route('admin.sequences.items.index', $sequence) }}" 
                                               class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                      rounded-full bg-blue-100 text-blue-700 hover:bg-blue-200 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                                </svg>
                                                Isi Materi
                                            </a>
                
                                            <!-- Edit -->
                                            <a href="{{ route('admin.sequences.edit', $sequence) }}" 
                                               class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                      rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                          d="M15.232 5.232l3.536 3.536M16.5 3.5a2.121 2.121 0 113 3L7.5 18.5l-4 1 1-4L16.5 3.5z" />
                                                </svg>
                                                Edit
                                            </a>
                
                                            <!-- Hapus -->
                                            <form action="{{ route('admin.sequences.destroy', $sequence) }}" method="POST" 
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus sequence ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                               rounded-full bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                              d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-500">
                                        Belum ada sequence untuk program ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                
                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $sequences->links() }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\studios\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Studio Baru</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <form method="POST" action="{{ route('admin.studios.store') }}">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="nama" value="Nama Studio" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="deskripsi" value="Deskripsi (Opsional)" />
                                <textarea id="deskripsi" name="deskripsi" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('deskripsi') }}</textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route('admin.studios.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <x-primary-button>Simpan Studio</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\studios\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Studio</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <form method="POST" action="{{ route('admin.studios.update', $studio) }}">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="nama" value="Nama Studio" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama', $studio->nama)" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="deskripsi" value="Deskripsi (Opsional)" />
                                <textarea id="deskripsi" name="deskripsi" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('deskripsi', $studio->deskripsi) }}</textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route('admin.studios.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <x-primary-button>Simpan Perubahan</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\studios\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Studio
            </h2>
            <a href="{{ route('admin.studios.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Studio
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm"
                             x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                            <button @click="show = false" class="ml-auto text-green-600 hover:text-green-800">&times;</button>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <div class="overflow-x-auto rounded-lg border border-gray-200">
                            <table class="min-w-full text-sm text-gray-700">
                                <thead class="bg-gray-100 text-gray-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left font-semibold w-16">No</th>
                                        <th class="px-4 py-3 text-left font-semibold">Nama Studio</th>
                                        <th class="px-4 py-3 text-left font-semibold">Deskripsi</th>
                                        <th class="px-4 py-3 text-center font-semibold w-32">Aksi</th>
                                    </tr>
                                </thead>
                        
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @forelse ($studios as $studio)
                                        <tr class="hover:bg-gray-50 transition">
                                            <td class="px-4 py-3">{{ $loop->iteration + $studios->firstItem() - 1 }}</td>
                                            <td class="px-4 py-3 font-medium text-gray-900">{{ $studio->nama }}</td>
                                            <td class="px-4 py-3 text-gray-600">{{ $studio->deskripsi ?? '-' }}</td>
                                            <td class="px-4 py-3 text-center">
                                                <div class="inline-flex items-center gap-2">
                                                    <a href="{{ route('admin.studios.edit', $studio) }}"
                                                       class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.studios.destroy', $studio) }}" method="POST"
                                                          onsubmit="return confirm('Anda yakin?');" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="py-6 text-center text-gray-500">Belum ada data studio.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                        
                    </div>
                     <div class="mt-4">
                        {{ $studios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\users\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pengguna Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" x-data="{ role: '{{ old('role', 'penyiar') }}' }">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama Lengkap -->
                            <div>
                                <x-input-label for="name" :value="__('Nama Lengkap')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email (untuk Login)')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                             <!-- Konfirmasi Password -->
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                             <!-- Role -->
                            <div>
                                <x-input-label for="role" :value="__('Role')" />
                                <select id="role" name="role" x-model="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="admin">Admin</option>
                                    <option value="penyiar">Penyiar</option>
                                    <option value="katim">Katim</option>
                                    <option value="kepsta">Kepsta</option>
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                        </div>

                        {{-- Biodata Penyiar (muncul jika role adalah 'penyiar') --}}
                        {{-- <div x-show="role === 'penyiar'" x-transition class="mt-6 pt-6 border-t border-gray-200">
                             <h3 class="text-lg font-medium text-gray-900 mb-4">Biodata Penyiar</h3>
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- NIK -->
                                <div>
                                    <x-input-label for="nik" :value="__('NIK')" />
                                    <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" />
                                    <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                                </div>
                                
                                <!-- Tempat Lahir -->
                                <div>
                                    <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                                    <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir')" />
                                    <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                                </div>

                                <!-- Tanggal Lahir -->
                                <div>
                                    <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                    <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" />
                                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                                </div>

                                <!-- Agama -->
                                <div>
                                    <x-input-label for="agama" :value="__('Agama')" />
                                    <select id="agama" name="agama" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                        <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                        <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                        <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                        <option value="Khonghucu" {{ old('agama') == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                                </div>

                                <!-- Jenis Kelamin -->
                                <div>
                                    <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                                </div>

                                <!-- Nomor Telepon -->
                                <div>
                                    <x-input-label for="no_telp" :value="__('Nomor Telepon')" />
                                    <x-text-input id="no_telp" class="block mt-1 w-full" type="text" name="no_telp" :value="old('no_telp')" />
                                    <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
                                </div>
                             </div>
                        </div> --}}

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.users.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\users\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pengguna: ') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="name" :value="__('Nama Lengkap')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email (untuk Login)')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="password" :value="__('Password Baru (Opsional)')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                             <div>
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                             <div>
                                <x-input-label for="role" :value="__('Role')" />
                                <select id="role" name="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="admin" @selected(old('role', $user->role) == 'admin')>Admin</option>
                                    <option value="penyiar" @selected(old('role', $user->role) == 'penyiar')>Penyiar</option>
                                    <option value="katim" @selected(old('role', $user->role) == 'katim')>Katim</option>
                                    <option value="kepsta" @selected(old('role', $user->role) == 'kepsta')>Kepsta</option>
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.users.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\users\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Pengguna
            </h2>
            <a href="{{ route('admin.users.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Pengguna
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="flex items-center gap-3 bg-red-50 border border-red-200 
                                    text-red-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left">No</th>
                                    <th class="px-4 py-3 font-semibold text-left">Nama</th>
                                    <th class="px-4 py-3 font-semibold text-left">Email</th>
                                    <th class="px-4 py-3 font-semibold text-left">Role</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($users as $user)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $user->name }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $user->email }}</td>
                                    <td class="px-4 py-3">
                                        @php
                                            $roleColors = [
                                                'admin' => 'bg-purple-100 text-purple-700',
                                                'penyiar' => 'bg-blue-100 text-blue-700',
                                                'katim' => 'bg-green-100 text-green-700',
                                                'kepsta' => 'bg-yellow-100 text-yellow-700',
                                            ];
                                        @endphp
                                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium {{ $roleColors[$user->role] ?? 'bg-gray-100 text-gray-700' }}">
                                            {{ Str::ucfirst($user->role) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex flex-wrap gap-2">
                                            <!-- Edit -->
                                            <a href="{{ route('admin.users.edit', $user) }}" 
                                               class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                      rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                âœï¸ Edit
                                            </a>

                                            <!-- Hapus -->
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" 
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                               rounded-full bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                    ðŸ—‘ï¸ Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-6 text-gray-500">
                                        Tidak ada data pengguna.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\auth\confirm-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\forgot-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\login.blade.php =====
<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mb-6">
        <img src="/logo-rri.png" alt="Logo RRI" class="h-14 w-auto">
    </div>

    <!-- Title -->
    <h2 class="text-center text-2xl font-bold text-white mb-6">Login ke Jadwal Siaran</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-300" />
            <x-text-input id="email"
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-slate-300" />
            <x-text-input id="password"
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-slate-700 bg-slate-800 text-blue-500 focus:ring-blue-500"
                       name="remember">
                <span class="ms-2 text-sm text-slate-300">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-slate-400 hover:text-blue-400 transition-colors"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Submit -->
        <div class="mt-6">
            <x-primary-button class="w-full bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold py-3 rounded-xl shadow-md hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\register.blade.php =====
<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mb-6">
        <img src="/logo-rri.png" alt="Logo RRI" class="h-14 w-auto">
    </div>

    <!-- Title -->
    <h2 class="text-center text-2xl font-bold text-white mb-6">Buat Akun Baru</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-slate-300" />
            <x-text-input id="name" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-slate-300" />
            <x-text-input id="email" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-slate-300" />
            <x-text-input id="password" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-300" />
            <x-text-input id="password_confirmation" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="password"
                          name="password_confirmation" 
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-6">
            <a class="text-sm text-slate-400 hover:text-blue-400 transition-colors" href="{{ route('login') }}">
                {{ __('Sudah punya akun? Login') }}
            </a>

            <x-primary-button class="ms-4 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold px-6 py-2 rounded-xl shadow-md hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\reset-password.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\verify-email.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>

===== resources\views\components\application-logo.blade.php =====
<svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
</svg>

===== resources\views\components\auth-session-status.blade.php =====
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif

===== resources\views\components\danger-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\dropdown-link.blade.php =====
<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

===== resources\views\components\dropdown.blade.php =====
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

===== resources\views\components\input-error.blade.php =====
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

===== resources\views\components\input-label.blade.php =====
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

===== resources\views\components\modal.blade.php =====
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>

===== resources\views\components\nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-2 px-3 py-2 rounded-lg font-medium 
               bg-blue-100 text-blue-700 shadow-sm'
            : 'flex items-center gap-2 px-3 py-2 rounded-lg font-medium text-gray-600 
               hover:bg-blue-50 hover:text-blue-600 
               transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\primary-button.blade.php =====
<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center justify-center gap-2 px-4 py-2.5 
                bg-indigo-600 text-white text-sm font-medium rounded-lg 
                hover:bg-indigo-700 focus:outline-none focus:ring-2 
                focus:ring-indigo-500 focus:ring-offset-2 active:bg-indigo-800 
                transition-all duration-200'
]) }}>
    {{ $slot }}
</button>


===== resources\views\components\responsive-nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\secondary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\text-input.blade.php =====
@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>

===== resources\views\laporan\jadwal.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Laporan Daftar Acara Siaran</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 no-print">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">Laporan Daftar Acara Siaran</h2>
                    <form method="GET" action="{{ route('laporan.jadwal.harian') }}" class="flex items-end space-x-4">
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Pilih Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal->format('Y-m-d') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">Tampilkan</button>
                        
                        {{-- TOMBOL CETAK SEMUA DIKEMBALIKAN --}}
                        <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d')]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400">
                            Cetak Semua
                        </a>
                    </form>
                </div>
            </div>

            @if($studios->isNotEmpty())
            <div x-data="{ 
                activeStudioTab: '{{ $studios->first()->nama }}',
                activeProgramTabs: {} 
            }" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="px-4 border-b border-gray-200">
                    <nav class="-mb-px flex space-x-3" aria-label="Tabs">
                        @foreach ($studios as $studio)
                            <button @click="activeStudioTab = '{{ $studio->nama }}'"
                                    :class="activeStudioTab === '{{ $studio->nama }}' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                                    class="whitespace-nowrap py-4 px-4 border-b-2 font-medium text-sm transition-colors duration-200 focus:outline-none">
                                {{ $studio->nama }}
                            </button>
                        @endforeach
                    </nav>
                </div>

                @foreach ($jadwalPerStudio as $namaStudio => $programsInStudio)
                    <div x-show="activeStudioTab === '{{ $namaStudio }}'" x-cloak
                         x-init="if (activeProgramTabs['{{ $namaStudio }}'] === undefined && {{ $programsInStudio->isNotEmpty() ? 'true' : 'false' }}) { activeProgramTabs['{{ $namaStudio }}'] = {{ $programsInStudio->first()->id }}; }">
                        
                        @if($programsInStudio->isNotEmpty())
                        <div class="px-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/70">
                            <nav class="flex space-x-2" aria-label="Program Tabs">
                                @foreach ($programsInStudio as $program)
                                    <button @click="activeProgramTabs['{{ $namaStudio }}'] = {{ $program->id }}"
                                            :class="activeProgramTabs['{{ $namaStudio }}'] === {{ $program->id }} ? 'bg-white text-indigo-600 shadow-sm' : 'text-gray-500 hover:text-gray-700'"
                                            class="whitespace-nowrap my-2 py-2 px-4 rounded-md font-medium text-sm transition-colors duration-200 focus:outline-none">
                                        {{ $program->nama }}
                                    </button>
                                @endforeach
                            </nav>
                            @foreach ($programsInStudio as $program)
                                <div x-show="activeProgramTabs[activeStudioTab] === {{ $program->id }}" x-cloak>
                                    <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d'), 'program' => $program->id]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 no-print">
                                        Cetak {{ $program->nama }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        @endif

                        @foreach ($programsInStudio as $program)
                            <div x-show="activeProgramTabs[activeStudioTab] === {{ $program->id }}" x-cloak class="printable-area">
                                <div class="p-6 text-gray-900">
                                    @include('laporan._tabel_program', ['program' => $program])
                                _</div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            @else
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center text-gray-500">
                    Jadwal siaran belum tersedia untuk tanggal yang dipilih.
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>

===== resources\views\laporan\jadwal_print.blade.php =====
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Jadwal Siaran - {{ $tanggal->isoFormat('D MMMM Y') }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10pt;
        }

        .container {
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h3,
        .header h4 {
            margin: 0;
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .schedule-table th,
        .schedule-table td {
            border: 1px solid #333;
            padding: 6px;
            text-align: left;
            vertical-align: top;
        }

        .schedule-table th {
            background-color: #f2f2f2;
        }

        .signature-section {
            margin-top: 40px;
        }

        .signature-block {
            margin-bottom: 40px;
            page-break-inside: avoid;
        }

        .signature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            text-align: center;
            margin-top: 30px;
        }

        .signature-grid div {
            padding-top: 60px;
        }

        .capitalize {
            text-transform: capitalize;
        }

        .font-semibold {
            font-weight: 600;
        }

        .underline {
            text-decoration: underline;
        }

        ol {
            margin: 0;
            padding-left: 20px;
        }


        /* AWAL MODIFIKASI: CSS UNTUK PRINT */
        @media print {

            

            .signature-block {
                page-break-before: always;
                margin-top: 2cm;
            }

            .signature-block:first-child {
                page-break-before: auto;
                /* Mencegah halaman kosong di awal */
                margin-top: 0;
            }
        }

        /* AKHIR MODIFIKASI */
    </style>
</head>

<body>
    <div class="container">
        @forelse ($programs as $program)
            @php $petugas = $jadwalPetugas->get($program->id); @endphp
            {{-- Setiap program dibungkus dalam div ini agar bisa dipisah halamannya --}}
            <div class="signature-block">
                <div class="header">
                    <h3>DAFTAR ACARA SIARAN</h3>
                    <h4>{{ $tanggal->isoFormat('dddd, D MMMM Y') }}</h4>
                </div>

                <table class="schedule-table">
                    {{-- ... (Isi tabel tetap sama, tidak perlu diubah) ... --}}
                    <thead class="bg-gray-100 text-left">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 w-1/12">Program</th>
                            <th class="border border-gray-300 px-4 py-2 w-1/12">Waktu</th>
                            <th class="border border-gray-300 px-4 py-2 w-2/12">Seqmen</th>
                            <th class="border border-gray-300 px-4 py-2 w-1/12">Pendengar</th>
                            <th class="border border-gray-300 px-4 py-2 w-3/12">Materi Siar</th>
                            <th class="border border-gray-300 px-4 py-2 w-4/12">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $programRowspan = 0;
                            foreach ($program->sequences as $sequence) {
                                $programRowspan += $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                            }
                        @endphp
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 align-top font-bold"
                                rowspan="{{ $programRowspan }}">{{ $program->nama }}</td>
                            @foreach ($program->sequences as $sequenceIndex => $sequence)
                                @php
                                    $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                                @endphp
                                @if ($sequenceIndex > 0)
                        <tr>
        @endif
        <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">
            {{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
        <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">
            {{ $sequence->nama }} <br> <small class="font-normal text-gray-500">Host:
                {{ $sequence->host->name ?? 'N/A' }}</small></td>
        <td class="border border-gray-300 px-4 py-2 align-top text-center" rowspan="{{ $sequenceRowspan }}">
            <span class="text-lg font-bold">{{ $sequence->jumlah_pendengar ?? '-' }}</span>
        </td>
        @forelse ($sequence->items as $itemIndex => $item)
            @if ($itemIndex > 0)
                <tr>
            @endif
            <td class="border border-gray-300 px-4 py-2 align-top">
                {{ $item->materi }}
                @if ($item->materiDetails->isNotEmpty())
                    <ol class="list-decimal list-inside mt-1 pl-2">
                        @foreach ($item->materiDetails as $detail)
                            <li class="text-gray-600">{{ $detail->isi }}</li>
                        @endforeach
                    </ol>
                @endif
            </td>
            <td class="border border-gray-300 px-4 py-2 align-top">
                @if ($item->keterangan)
                    <p class="mb-2 italic text-gray-700">{{ $item->keterangan }}</p>
                @endif
                @if ($item->itemDetails->isNotEmpty())
                    @foreach ($item->itemDetails->groupBy('jenis') as $jenis => $details)
                        <p class="font-semibold capitalize">{{ $jenis }}:</p>
                        <ol class="list-decimal list-inside pl-4 mb-2">
                            @foreach ($details as $detail)
                                <li>{{ $detail->isi }}</li>
                            @endforeach
                        </ol>
                    @endforeach
                @endif
            </td>
            </tr>
        @empty
            <td class="border border-gray-300 px-4 py-2 align-top"></td>
            <td class="border border-gray-300 px-4 py-2 align-top"></td>
            </tr>
        @endforelse
        @endforeach
        </tbody>
        </table>

        @if ($petugas)
            <div class="signature-section">
                <h3 style="text-align:center; font-weight:bold; margin-bottom: 20px;">PETUGAS -
                    {{ $program->nama }}</h3>
                {{-- ... (Tabel petugas & tanda tangan tetap sama) ... --}}
                <table style="width: 50%; margin-bottom: 20px;">
                    <tr>
                        <td style="width: 40%;">Nama Daypart</td>
                        <td>: {{ $program->nama }}</td>
                    </tr>
                    <tr>
                        <td>Produser</td>
                        <td>: {{ $petugas->produser_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pengelola PEP</td>
                        <td>: {{ $petugas->pengelola_pep_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pengarah Acara</td>
                        <td>: {{ $petugas->pengarah_acara_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Petugas LPU</td>
                        <td>: {{ $petugas->petugas_lpu_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penyiar</td>
                        <td>: {{ $petugas->penyiars->first()->name ?? '-' }}</td>
                    </tr>
                </table>
                <p>Diparaf oleh petugas LPU, sebagai tanda bahwa iklan telah terputar.</p>
                <p>Gorontalo, {{ $tanggal->isoFormat('D MMMM YYYY') }}</p>
                <div class="signature-grid">
                    <div>
                        Penyiar Dinas<br><br><br><br>
                        <span class="font-semibold underline">({{ $petugas->penyiars->first()->name ?? '____________________' }})</span>
                    </div>
                    <div>
                        Pengelola Pro 2<br><br><br><br>
                        <span class="font-semibold underline">({{ $petugas->pengelola_pep_nama ?? '____________________' }})</span>
                    </div>
                    <div>
                        Petugas LPU<br><br><br><br>
                        <span
                            class="font-semibold underline">({{ $petugas->petugas_lpu_nama ?? '____________________' }})</span>
                    </div>
                </div>
            </div>
        @endif
    </div>
    @empty
        <div class="header">
            <p>Jadwal siaran belum tersedia untuk tanggal yang dipilih.</p>
        </div>
        @endforelse
        </div>
        <script>
            window.onload = function() {
                window.print();
            }
        </script>
    </body>

    </html>

===== resources\views\laporan\_tabel_program.blade.php =====
<div class="overflow-x-auto">
    <table class="min-w-full border-collapse border border-gray-300 text-sm">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="border border-gray-300 px-4 py-2 w-1/12">Program</th>
                <th class="border border-gray-300 px-4 py-2 w-1/12">Waktu</th>
                <th class="border border-gray-300 px-4 py-2 w-2/12">Seqmen</th>
                <th class="border border-gray-300 px-4 py-2 w-1/12">Pendengar</th>
                <th class="border border-gray-300 px-4 py-2 w-3/12">Materi Siar</th>
                <th class="border border-gray-300 px-4 py-2 w-4/12">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $programRowspan = 0;
                if ($program->sequences->isNotEmpty()) {
                    foreach ($program->sequences as $sequence) {
                        $programRowspan += $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                    }
                } else {
                    $programRowspan = 1;
                }
            @endphp
            <tr>
                <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $programRowspan }}">{{ $program->nama }}</td>
                @forelse ($program->sequences as $sequenceIndex => $sequence)
                    @php
                        $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                    @endphp
                    @if ($sequenceIndex > 0) <tr> @endif
                    <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                    <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">{{ $sequence->nama }} <br> <small class="font-normal text-gray-500">Host: {{ $sequence->host->name ?? 'N/A' }}</small></td>
                    <td class="border border-gray-300 px-4 py-2 align-top text-center" rowspan="{{ $sequenceRowspan }}">
                        <span class="text-lg font-bold">{{ $sequence->jumlah_pendengar ?? '-' }}</span>
                    </td>
                    @forelse ($sequence->items as $itemIndex => $item)
                        @if ($itemIndex > 0) <tr> @endif
                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->materi }}</td>
                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->keterangan }}</td>
                        </tr>
                    @empty
                        <td colspan="2" class="border border-gray-300 px-4 py-2 align-top text-gray-400 italic">-- Belum ada materi --</td>
                        </tr>
                    @endforelse
                @empty
                    <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-400 italic">-- Belum ada sequence --</td>
                    </tr>
                @endforelse
        </tbody>
    </table>
</div>

===== resources\views\layouts\app.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>[x-cloak] { display: none !important; }</style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ sidebarOpen: false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <div
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto"
        >
            @include('layouts.navigation')
        </div>

        <!-- Overlay -->
        <div
            x-show="sidebarOpen"
            @click="sidebarOpen = false"
            x-cloak
            class="fixed inset-0 bg-black bg-opacity-25 z-20 md:hidden"
        ></div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col w-full">

            <!-- Mobile topbar -->
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <!-- Tombol hamburger -->
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            
                <!-- Judul di tengah -->
                <div class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>
            

            <!-- Optional header (desktop only) -->
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-7">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>

===== resources\views\layouts\guest.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 text-slate-200">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            
            <!-- Logo -->
            <div>
                <a href="/" class="group">
                    <x-application-logo class="w-20 h-20 text-blue-500 group-hover:scale-110 transition-transform duration-300" />
                </a>
            </div>

            <!-- Card Container -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 
                        bg-slate-900/80 backdrop-blur-xl 
                        border border-slate-800 
                        shadow-2xl shadow-blue-500/10 
                        rounded-2xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

===== resources\views\layouts\navigation.blade.php =====
<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="py-7 px-6 border-b border-gray-200 shadow-sm">
        <a href="{{ route('dashboard') }}" 
           class="text-2xl font-extrabold text-blue-700 tracking-tight hover:text-blue-800 transition-colors">
            {{ config('app.name', 'MY APP') }}
        </a>
    </div>
    
    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            <span>{{ __('Dashboard') }}</span>
        </x-nav-link>

        {{-- @role('admin') --}}
        @if(Auth::check() && Auth::user()->role === 'admin')
        <div class="pt-4">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Admin
            </h3>
            <div class="mt-2 space-y-2">
                <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span>Kelola Pengguna</span>
                </x-nav-link>
                <x-nav-link :href="route('admin.programs.index')" :active="request()->routeIs('admin.programs.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                    <span>Kelola Program</span>
                </x-nav-link>
                <x-nav-link :href="route('admin.studios.index')" :active="request()->routeIs('admin.studios.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span>Kelola Studio</span>
                </x-nav-link>
            </div>
        </div>
        @endif

        @if(Auth::check() && Auth::user()->role === 'penyiar')
        <div class="pt-4">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Penyiar
            </h3>
            <div class="mt-2 space-y-2">
                <x-nav-link :href="route('penyiar.jadwal.index')" :active="request()->routeIs('penyiar.jadwal.*', 'admin.items.*')">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18M12 15.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span>Jadwal Siaran Saya</span>
                </x-nav-link>
            </div>
        </div>
        @endif

        @if(Auth::check() && in_array(Auth::user()->role, ['katim', 'kepsta']))
        <div class="pt-4">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Laporan
            </h3>
            <div class="mt-2 space-y-2">
                <x-nav-link :href="route('laporan.jadwal.harian')" :active="request()->routeIs('laporan.jadwal.*')">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                    </svg>
                    <span>Jadwal Harian</span>
                </x-nav-link>
            </div>
        </div>
        @endif
        {{-- @endrole --}}

    </nav>
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left 
                   bg-gray-50 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 
                   transition-colors">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    
        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white border border-gray-200 rounded-lg shadow-md text-sm">
            <a href="{{ route('profile.edit') }}"
               class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                {{ __('Profile') }}
            </a>
    
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 hover:text-red-700 rounded-lg transition-colors">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
    
</aside>

===== resources\views\penyiar\jadwal\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jadwal Siaran Saya') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">

                    @if (session('success'))
                        <div class="rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                            âœ… {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full text-sm text-gray-700">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">Studio</th>
                                    <th class="px-4 py-3 text-left font-semibold">Program</th>
                                    <th class="px-4 py-3 text-left font-semibold">Nama Sequence</th>
                                    <th class="px-4 py-3 text-left font-semibold">Waktu</th>
                                    <th class="px-4 py-3 text-left font-semibold">Jumlah Pendengar</th>
                                    <th class="px-4 py-3 text-center font-semibold w-40">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($sequences as $sequence)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-3 font-medium text-gray-900">
                                            {{ $sequence->program->studio->nama ?? '-' }}
                                        </td>
                                        <td class="px-4 py-3 font-medium text-gray-900">
                                            {{ $sequence->program->nama ?? 'N/A' }}
                                        </td>
                                        <td class="px-4 py-3 text-gray-700">{{ $sequence->nama }}</td>
                                        <td class="px-4 py-3 text-gray-700">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                        <td class="px-4 py-3">
                                            <form action="{{ route('penyiar.sequences.pendengar.update', $sequence) }}" 
                                                  method="POST" class="flex items-center gap-2">
                                                @csrf
                                                @method('PATCH')
                                        
                                                <div class="relative">
                                                    <input type="number" name="jumlah_pendengar" 
                                                           value="{{ $sequence->jumlah_pendengar }}"
                                                           class="w-28 pl-8 pr-2 py-1.5 text-sm border-gray-300 rounded-md 
                                                                  focus:border-indigo-500 focus:ring-indigo-500">
                                                                  
                                                             
                                                </div>
                                        
                                                <button type="submit"
                                                        class="inline-flex items-center gap-1 px-3 py-1.5 bg-indigo-600 text-white 
                                                               text-xs font-medium rounded-md hover:bg-indigo-700 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    Simpan
                                                </button>
                                            </form>
                                        </td>
                                        
                                        <td class="px-4 py-3 text-center">
                                            <a href="{{ route('penyiar.sequences.items.index', $sequence) }}"
                                               class="inline-flex items-center gap-2 px-3 py-1.5 rounded-md text-sm font-medium 
                                                      text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
                                                      transition-all duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                </svg>
                                                Isi Materi
                                            </a>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-6 text-gray-500">
                                            Anda belum memiliki jadwal siaran yang ditugaskan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $sequences->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\profile\partials\delete-user-form.blade.php =====
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

===== resources\views\profile\partials\update-password-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\partials\update-profile-information-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Selamat Datang, <span class="font-bold">{{ Auth::user()->name }}</span>!</p>

                    {{-- KONTEN UNTUK ADMIN --}}
                    @if (Auth::user()->role === 'admin')
                        {{-- <h3 class="text-lg font-semibold border-b pb-2 mb-4">Ringkasan Sistem</h3> --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-blue-100 p-4 rounded-lg">
                                <p class="text-sm text-blue-700">Total Pengguna</p>
                                <p class="text-2xl font-bold text-blue-900">{{ $totalUsers }}</p>
                            </div>
                            <div class="bg-green-100 p-4 rounded-lg">
                                <p class="text-sm text-green-700">Total Program</p>
                                <p class="text-2xl font-bold text-green-900">{{ $totalPrograms }}</p>
                            </div>
                            <div class="bg-yellow-100 p-4 rounded-lg">
                                <p class="text-sm text-yellow-700">Total Seqmen</p>
                                <p class="text-2xl font-bold text-yellow-900">{{ $totalSequences }}</p>
                            </div>
                            <div class="bg-yellow-100 p-4 rounded-lg">
                                <p class="text-sm text-yellow-700">Total Studio</p>
                                <p class="text-2xl font-bold text-yellow-900">{{ $totalStudios }}</p>
                            </div>
                        </div>
                        
                        {{-- <div class="mt-6">
                            <a href="{{ route('admin.programs.index') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                                &raquo; Kelola Program Siaran
                            </a>
                        </div> --}}
                    
                    {{-- KONTEN UNTUK PENYIAR --}}
                    @elseif (Auth::user()->role === 'penyiar')
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">Jadwal Terdekat Anda</h3>
                        @if($jadwalTerdekat->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($jadwalTerdekat as $sequence)
                                <li class="p-3 bg-gray-50 rounded-md border">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="font-semibold">{{ $sequence->nama }} ({{ $sequence->program->nama }})</p>
                                            <p class="text-sm text-gray-600">Pukul: {{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</p>
                                        </div>
                                        <a href="{{ route('penyiar.sequences.items.index', $sequence) }}" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">
                                            Isi Materi &raquo;
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="mt-6">
                                <a href="{{ route('penyiar.jadwal.index') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                                    &raquo; Lihat Semua Jadwal Saya
                                </a>
                            </div>
                        @else
                            <p>Anda belum memiliki jadwal siaran yang ditugaskan.</p>
                        @endif

                    {{-- KONTEN UNTUK KATIM & KEPSTA --}}
                    @elseif (in_array(Auth::user()->role, ['katim', 'kepsta']))
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">Akses Laporan</h3>
                        <p class="mb-4">Anda dapat melihat laporan jadwal siaran harian melalui link di bawah ini.</p>
                        <a href="{{ route('laporan.jadwal.harian') }}" class="inline-block px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-500">
                            Lihat Laporan Jadwal Harian
                        </a>
                    
                    @else
                        <p>{{ __("You're logged in!") }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\welcome.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Siaran RRI - Manajemen Modern</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-950 text-slate-200">
    <div class="relative min-h-screen flex flex-col">
        
        <!-- HEADER -->
        <header class="sticky top-0 z-50 w-full backdrop-blur-md bg-slate-950/80 border-b border-slate-800">
            <div class="container mx-auto flex justify-between items-center p-4">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="/logo-rri.png" alt="Logo RRI" class="h-10 w-auto transition-transform duration-300 group-hover:scale-110"> 
                    <span class="text-xl font-bold text-white group-hover:text-blue-400 transition-colors hidden sm:block">
                        Jadwal Siaran
                    </span>
                </a>

                <nav class="flex items-center space-x-4 sm:space-x-6">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" 
                           class="relative text-slate-600 dark:text-slate-300 font-semibold transition-colors duration-300 group py-1">
                            <span>Log in</span>
                            {{-- Garis Bawah Animasi --}}
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-center"></span>
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold px-5 py-2.5 rounded-xl shadow-lg shadow-blue-500/20 hover:shadow-xl hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-1">
                            Register
                        </a>
                    @endif
                </nav>
            </div>
        </header>

        <!-- HERO -->
        <main class="flex-grow">
            <section class="relative isolate overflow-hidden">
                <div class="container mx-auto px-6 pt-24 pb-32 text-center">
                    <!-- Background Gradient Shape -->
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-72" aria-hidden="true">
                        <div class="relative left-1/2 aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-blue-500 to-sky-600 opacity-30 sm:w-[72rem]"
                             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    
                    <div class="mx-auto max-w-4xl">
                        {{-- <div class="mb-8 flex justify-center">
                            <div class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-blue-300 bg-slate-900 ring-1 ring-slate-700 hover:ring-blue-500 transition-colors duration-300 shadow-sm">
                                Didesain untuk Admin, Penyiar, Katim & Kepsta
                            </div>
                        </div> --}}
                        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-white">
                            Platform Kolaboratif untuk
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-sky-300">Jadwal Siaran RRI</span>
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto text-lg leading-8 text-slate-400">
                            Tinggalkan cara manual. Sambut era baru penjadwalan siaran yang terintegrasi, cepat, dan bebas dari kesalahan.
                        </p>
                        {{-- <div class="mt-10">
                            <a href="{{ route('dashboard') }}" 
                               class="inline-block bg-gradient-to-r from-blue-600 to-sky-500 text-white font-bold text-lg px-8 py-4 rounded-2xl shadow-lg hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                                Mulai Sekarang &rarr;
                            </a>
                        </div> --}}
                    </div>
                </div>
            </section>
            
            <!-- FITUR -->
            <section class="bg-slate-950 py-24">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                         <h2 class="text-4xl font-bold tracking-tight text-white">Semua yang Anda Butuhkan</h2>
                         <p class="text-slate-400 mt-4 text-lg">Dari templat master hingga laporan real-time, semua dalam satu platform.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                        <!-- CARD 1 -->
                        <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 shadow-lg 
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/30 
                                    transition-all duration-500 ease-out group">
                            <div class="bg-gradient-to-br from-blue-600 to-sky-500 text-white 
                                        rounded-xl w-14 h-14 flex items-center justify-center mb-6 
                                        group-hover:rotate-6 group-hover:scale-110 
                                        transition-transform duration-500 ease-out">
                                <!-- Calendar Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     fill="none" viewBox="0 0 24 24" 
                                     stroke-width="1.5" stroke="currentColor" 
                                     class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M6.75 3v2.25M17.25 3v2.25M3.75 9h16.5m-1.5 
                                          11.25h-13.5a2.25 2.25 0 01-2.25-2.25V7.5a2.25 
                                          2.25 0 012.25-2.25h13.5a2.25 2.25 0 012.25 
                                          2.25v10.5a2.25 2.25 0 01-2.25 2.25z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-500">
                                Templat Jadwal Dinamis
                            </h3>
                            <p class="text-slate-400 group-hover:text-slate-200 transition-colors duration-500">
                                Admin dapat membuat templat jadwal per-Daypart yang siap digunakan penyiar setiap hari hanya dengan satu klik.
                            </p>
                        </div>

                        <!-- CARD 2 -->
                        <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 shadow-lg 
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/30 
                                    transition-all duration-500 ease-out group">
                            <div class="bg-gradient-to-br from-blue-600 to-sky-500 text-white 
                                        rounded-xl w-14 h-14 flex items-center justify-center mb-6 
                                        group-hover:rotate-6 group-hover:scale-110 
                                        transition-transform duration-500 ease-out">
                                <!-- Document Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     fill="none" viewBox="0 0 24 24" 
                                     stroke-width="1.5" stroke="currentColor" 
                                     class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M19.5 14.25v-7.5A2.25 2.25 0 0017.25 
                                          4.5h-10.5A2.25 2.25 0 004.5 
                                          6.75v10.5A2.25 2.25 0 006.75 
                                          19.5h6.879c.414 0 .81-.165 
                                          1.102-.458l4.241-4.241a1.5 
                                          1.5 0 00.458-1.051z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M9 9.75h6M9 12.75h3"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-500">
                                Input Terstruktur
                            </h3>
                            <p class="text-slate-400 group-hover:text-slate-200 transition-colors duration-500">
                                Penyiar mengisi detail siaran dengan komponen yang disetujui, mengurangi kesalahan dan menjaga konsistensi.
                            </p>
                        </div>

                        <!-- CARD 3 -->
                        <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 shadow-lg 
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/30 
                                    transition-all duration-500 ease-out group">
                            <div class="bg-gradient-to-br from-blue-600 to-sky-500 text-white 
                                        rounded-xl w-14 h-14 flex items-center justify-center mb-6 
                                        group-hover:rotate-6 group-hover:scale-110 
                                        transition-transform duration-500 ease-out">
                                <!-- Chart Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     fill="none" viewBox="0 0 24 24" 
                                     stroke-width="1.5" stroke="currentColor" 
                                     class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M3 3v18h18M9 17v-4.5M15 17V9M12 
                                          17v-2.25"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-500">
                                Monitoring Mudah
                            </h3>
                            <p class="text-slate-400 group-hover:text-slate-200 transition-colors duration-500">
                                Kepsta & Katim dapat melihat laporan jadwal siaran final secara real-time, tanpa menunggu dokumen fisik.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- FOOTER -->
        <footer class="bg-gradient-to-r from-blue-600 to-sky-500">
            <div class="container mx-auto px-6 py-8 text-center text-white font-medium">
                &copy; {{ date('Y') }} Jadwal Siaran RRI. <span class="opacity-80">Dikembangkan untuk efisiensi modern.</span>
            </div>
        </footer>
    </div>
</body>
</html>

```


## Entry Points & Main Configs Content
```
===== public\index.php =====
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

===== artisan =====
#!/usr/bin/env php
<?php

use Illuminate\Foundation\Application;
use Symfony\Component\Console\Input\ArgvInput;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the command...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$status = $app->handleCommand(new ArgvInput);

exit($status);

===== resources\js\app.js =====
import './bootstrap';

import Alpine from 'alpinejs';
import TomSelect from 'tom-select';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', function () {
    const el = document.getElementById('penyiars');

    if (el) {
        new TomSelect(el, {
            create: false,
            maxItems: 1,
            placeholder: 'Ketik nama penyiar...',
            persist: false,
            selectOnTab: true,
            closeAfterSelect: true,
            allowEmptyOption: true,
            render: {
                option: function (data, escape) {
                    return `<div class="py-2 px-3 hover:bg-gray-100 text-sm text-gray-800">
                                <span class="font-medium">${escape(data.text)}</span>
                            </div>`;
                },
                item: function (data, escape) {
                    return `<div class="text-sm font-semibold text-gray-800">${escape(data.text)}</div>`;
                }
            },
            plugins: ['clear_button', 'dropdown_input'], // Tambah tombol 'x' untuk hapus pilihan & input di dropdown
            dropdownParent: 'body', // pastikan dropdown muncul di atas layer lain
            dropdownDirection: 'up', // biar muncul ke atas kalau di bagian bawah halaman
            onInitialize: function () {
                // Tambahkan efek focus otomatis saat form dibuka
                const control = this.control_input;
                control.setAttribute('autocomplete', 'off');
            },
            onDropdownOpen: function () {
                // Animasi buka dropdown
                this.dropdown_content.style.transition = 'all 0.15s ease';
                this.dropdown_content.style.opacity = 1;
                this.dropdown_content.style.transform = 'translateY(0)';
            },
            onDropdownClose: function () {
                // Animasi tutup dropdown
                this.dropdown_content.style.transition = 'all 0.15s ease';
                this.dropdown_content.style.opacity = 0;
                this.dropdown_content.style.transform = 'translateY(-5px)';
            }
        });
    }
});


Alpine.start();

===== vite.config.js =====
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

===== config\app.php =====
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];

===== config\database.php =====
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
            'transaction_mode' => 'DEFERRED',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

    ],

];

```

== Selesai ==
