<<<<<<< Updated upstream
<<<<<<< Updated upstream


<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

<!-- *************************************************-->
<!-- BURAYI KULLANMIYORUZ USER_PROFİLE TAŞIDIK BURAYI-->
<!-- *************************************************-->
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="left-sidebar">

                    <button type="button" class="collapsible">Hesabım</button>
                    <div class="content">
                        <li><a href="{{route('myprofile')}}">Profilim </a> </li>
                        <li><a href="">Mesajlarım </a></li>
                        <li><a href="{{route('logout')}}">Çıkış/logout </a></li>
                    </div>

                    <script>
                        var coll = document.getElementsByClassName("collapsible");
                        var i;

                        for (i = 0; i < coll.length; i++) {
                            coll[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var content = this.nextElementSibling;
                                if (content.style.display === "block") {
                                    content.style.display = "none";
                                } else {
                                    content.style.display = "block";
                                }
                            });
                        }
                    </script>

                </div>
            </div>
            <!-- İÇERİK BUARAYA GELECCEK-->
        </div>
    </div>
=======
=======
>>>>>>> Stashed changes
<div class="col-sm-2">
    <div class="left-sidebar">

        <button type="button" class="collapsible">Hesabım</button>
        <div class="content">
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}">Admin panel</a></li>
            @endif
            <li><a href="{{route('myprofile')}}">Profilim </a></li>
            <li><a href="{{route('myreviews')}}">Yorumlarım </a></li>
            <li><a href="{{route('paymentslist')}}">Ödemelerim </a></li>
            <li><a href="{{route('logout')}}">Çıkış/logout </a></li>
        </div>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>

    </div>
</div>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
