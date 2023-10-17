@props(['bootcamp'])

<div class="homepage-card">

    <div class="homepage-card-link-to-page">

        <a href="bootcamps/{{ $bootcamp->slug }}">
            
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

            <div class="homepage-card-bottom">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis voluptas eveniet, quasi incidunt placeat nam iusto odit eius dolor praesentium!</p>
            </div>

        </a>

    </div>

    <form action="" method="post">
        
        <button class="homepage-card-join-button">JOIN THIS BOOTCAMP</button>

    </form>

</div>