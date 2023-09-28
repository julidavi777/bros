<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Support\Facades\Blade;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('departamentos', Departamento::all());
        });

        View::composer('*', function ($view) {
            $view->with('municipios', Municipio::all());
        });
        Blade::directive('permission', function ($expression) {
            return "<?php echo app(App\View\Components\Directives\PermissionsDirective::class, ['permission' => {$expression}])->render(); ?>";
        });
    }
}
