<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            $adminMenu = [
                [
                    'text'        => 'Dashboard',
                    'url'         => 'home',
                    'icon'        => 'fa fa-home',
                ],
                [
                    'text'        => 'Jenis Perkara',
                    'url'         => 'jenis_perkara',
                    'icon'        => 'fa fa-check',
                ],
        
                [
                    'text'        => 'Prasyarat',
                    'url'         => 'prasyarat',
                    'icon'        => 'fa fa-book',
                ],
        
               
            ];
            $pendaftaranMenu = [
                [
                    'text'        => 'Perkara',
                    'url'         => 'perkara',
                    'icon'        => 'far fa-copy',
                ],
                [
                    'text'        => 'Biaya Pendaftaran',
                    'url'         => 'pendaftaran',
                    'icon'        => 'fa fa-book',
                ],
            ];
            $sidangMenu = [
                [
                    'text'        => 'Antrian Sidang',
                    'url'         => 'antrian',
                    'icon'        => 'far fa-calendar',
                ],
        
                [
                    'text'        => 'Data Sidang',
                    'url'         => 'sidang',
                    'icon'        => 'fa fa-database',
                ],

                [
                    'text'        => 'Data Saksi',
                    'url'         => 'sidang/saksi',
                    'icon'        => 'fa fa-users',
                ],
            ];
            $pengaduanMenu = [
                [
                    'text'        => 'Data Pegawai',
                    'url'         => 'pengaduan/pegawai',
                    'icon'        => 'fa fa-users',
                ],
        
                [
                    'text'        => 'Data Pengaduan',
                    'url'         => 'pengaduan',
                    'icon'        => 'fa fa-bug',
                ],
            ];
            $kasirMenu = [
                [
                    'text'        => 'Transaksi Uang',
                    'url'         => 'kasir',
                    'icon'        => 'fa fa-database',
                ],
            ];
            $produkMenu = [
                [
                    'text'        => 'Transaksi Uang',
                    'url'         => 'kasir',
                    'icon'        => 'fa fa-database',
                ],
            ];
            // Add some items to the menu...
            if(Auth::user()) {

                $role = Auth::user()->role;
                if($role == '0') {
                    $event->menu->add('DATA MASTER');
                    foreach ($adminMenu as $menu) {
                        $event->menu->add($menu);
                    }
                }

                if($role == '0' || $role == '1') {
                    // $event->menu->add('PENGADUAN');
                    foreach ($pendaftaranMenu as $menu) {
                        $event->menu->add($menu);
                    }
                }

                if($role == '0' || $role == '5') {
                    $event->menu->add('PERSIDANGAN');
                    foreach ($sidangMenu as $menu) {
                        $event->menu->add($menu);
                    }
                }

                if($role == '0' || $role == '2') {
                    $event->menu->add('PENGADUAN');
                    foreach ($pengaduanMenu as $menu) {
                        $event->menu->add($menu);
                    }
                }

                if($role == '0' || $role == '3') {
                    $event->menu->add('KASIR');
                    foreach ($kasirMenu as $menu) {
                        $event->menu->add($menu);
                    }
                }

                if($role == '0' || $role == '4') {
                    $event->menu->add('PRODUK');
                    foreach ($produkMenu as $menu) {
                        $event->menu->add($menu);
                    }
                }

            }
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
