@props(['bootcamp'])

<div class="homepage-card">

    <div class="homepage-card-link-to-page">

        <a href="manage-bootcamp/{{ $bootcamp->slug }}">
            
            <div class="homepage-card-top">

                <img src="/images/image 10.jpg" alt="bootcamp-img">

                <div class="homepage-card-name-slot-container">

                    <div class="homepage-card-name">{{ $bootcamp->name }}</div>

                    <div class="homepage-card-bootcamp-slots">

                        <span class="homepage-bootcamp-slots-number">{{ $bootcamp->total_joined }}</span>

                        <span class="homepage-bootcamp-slots-joined">Joined</span>    

                    </div>

                </div>

            </div>

        </a>

    </div>

    <a href="manage-bootcamp/{{ $bootcamp->slug }}"><button class="homepage-card-join-button">Manage</button></a>

</div>