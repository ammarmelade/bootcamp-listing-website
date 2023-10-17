<x-layout>

    <x-slot name='title'>Inbox | O-Camp</x-slot>

    <x-slot name='content'>
        
        <div class="mail-sidebar">

            <div>
                <h1>Mail</h1>
            </div>

            <div class="mail-sidebar-menu">

                <span class="mail-sidebar-menu-icon"></span>

                <span class="mail-sidebar-menu-title">Inbox</span>

                <span class="mail-sidebar-menu-count">10</span>

            </div>

            <div class="mail-sidebar-menu">

                <span class="mail-sidebar-menu-icon"></span>

                <span class="mail-sidebar-menu-title">Deleted</span>

                <span class="mail-sidebar-menu-count">2</span>

            </div>

        </div>

        <hr>

        <div class="mail-overview">

            <div class="mail-overview-header">

                <div class="back-btn-container">back</div>

                <div><h1>Inbox</h1></div>

                <div class="mail-searchbar-container">

                    <form action="" method="get">
            
                        {{-- <div class="searchbar-container"> --}}
                            
                            {{-- <img id="searchbar-icon" src="/images/search-icon.svg" alt="search icon svg"/> --}}
        
                            <input type="text" name="search" id="searchbar-text" placeholder="Search..." value="{{ request('search') }}">
            
                        {{-- </div> --}}
                        
                    </form>

                </div>

            </div>

            <div class="mail-overview-list">

                <div class="mail-overview-container">

                    <div class="mail-overview-top">

                        <div class="mail-overview-sender">O-Camp Admin</div>

                        <div class="mail-overview-timestamp">1m ago</div>

                    </div>

                    <div class="mail-overview-title-container">

                        <h2>Bootcamp is under review</h2>

                    </div>

                    <div class="mail-overview-content">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio ratione corporis et amet beatae!</p>

                    </div>

                </div>

            </div>

        </div>

        <hr>

        <div class="mail-content-window">

            <div class="delete-btn-container"></div>

            <div class="mail-content-sender-details">

                <div class="mail-sender-picure"></div>

                <div class="mail-sender-details">

                    <div class="mail-sender-details-name">Admin Budi</div>

                    <div class="mail-sender-details-email">budi@ocamp.com</div>

                </div>

            </div>

            <div class="mail-content-title"><h2>Bootcamp is under review</h2></div>

            <div class="mail-content-body">

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius fuga dolorem distinctio non porro debitis accusamus. Recusandae cumque accusantium omnis natus quos eveniet dolorum quas distinctio laboriosam beatae optio, vero, vitae corporis facilis delectus perspiciatis voluptate esse, ut soluta quae!

            </div>

        </div>

    </x-slot>

</x-layout>