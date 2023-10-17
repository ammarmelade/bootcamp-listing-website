@props(['bootcamp'])

<div class="flip-card suspend">

    <div class="flip-card-inner">

        <div class="flip-card-front">

            <div class="box-atas-kecil align-mid">

                <div class="flex ml-5">

                    <img src="images/foto-suspend.png" width="124.88px" height="71px">

                    <div class="keterangan-bootcamp">

                        <h2>{{ $bootcamp->name }}</h2>

                        <div class="tulisan-joined">

                            <div class="angka">

                                <p class="jumlah">{{ $bootcamp->total_joined }}</p>

                                <p class="tulisan"> Joined</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="isi-bootcamp">
                {{ $bootcamp->overview }}
            </div>

            <div class="footer-bootcamp">
                hover to see bootcamp detail
            </div>
            
        </div>

        <div class="flip-card-back">
            <div class="box-atas-kecil align-mid">
                <div class="flex ml-5">
                    <div class="keterangan-bootcamp-2">
                        <div>
                            <h2>{{ $bootcamp->name }}</h2>
                            <div class="tulisan-joined">
                                <div class="angka">
                                    <p class="jumlah">{{ $bootcamp->total_joined }}</p>
                                    <p class="tulisan"> Joined</p>
                                </div>
                            </div>
                        </div>
                        <div class="bintang">

                            @for ($k = 0; $k < $bootcamp->rating; $k++)

                                <img src="images/star.png" alt="">

                            @endfor

                            @for ($k = 0; $k < (5 - $bootcamp->rating); $k++)

                                <img src="images/star-act.png" alt="">

                            @endfor

                        </div>
                    </div>
                </div>
            </div>
            <div class="isi-bootcamp-2">
                <div class="flex">
                    <p class="mr-20">Fee</p>
                    <p class="mr-5">IDR</p>
                    <p>{{ number_format($bootcamp->fee, 2, '.', ',') }}</p>
                </div>

                <div class="desc">
                    {{ $bootcamp->overview }}
                </div>

                <div class="flex-end">

                    <form id="billform-{{ $bootcamp->slug }}" action="/billing-bootcamp/{{ $bootcamp->slug }}" method="post">

                        @csrf

                        <a href="{{ $bootcamp->link }}" onclick="document.getElementById('billform-{{ $bootcamp->slug }}').submit(); return false" class="join-bootcamp">Join this bootcamp</a>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
