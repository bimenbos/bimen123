<section class="pt-120-2 pb-64 px-120 bg-white">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="px-50">
                    <p class="font-32-sb font-black" align="center">Login Owner</p>
                    <p class="font-16-r font black" align="center">Belum punya akun? <a href="https://kasirpintar.co.id/register?utm_source=web&utm_medium=login_page&utm_campaign=button1" id="btn_reg_login" class="font-green">Daftar di sini</a></p>
                                        <div class="mt-30">
                        <p class="font-14-r font-gray">Masuk Sebagai</p>
                        <select id="sebagai" class="form-select mt-5-2 font-14-r" onchange="myFunction()">
                            <option class="font-14-r" value="owner" selected>Owner</option>
                            <option class="font-14-r" value="staff" >Staff</option>
                        </select>
                    </div>
                    <form action="https://kasirpintar.co.id/login" class="mt-20" method="post">
                        <input type="hidden" name="_token" value="M8atnKnGHYrkQ5Ex1X5A7Wo47NvBjuwHpABipbtM">
                        <input hidden name="url_cuss" value="https://kasirpintar.co.id/account">
                        <div class="form-group">
                            <p class="font-14-r font-gray">E-Mail</p>
                            <input type="email" class="form-control mt-5-2 radius-8 font-14-r" placeholder="E-Mail Owner" name="email"  value=""  required autofocus>
                                                    </div>
                        <div class="form-group mt-20">
                            <p class="font-14-r font-gray">Password</p>
                            <input id="password" type="password" class="form-control mt-5-2 radius-8 font-14-r" placeholder="Password" name="password" required>
                            <span onclick="showPassword()" class="fa fa-fw fa-eye pass-icon form-eye show-password" id="showPass"></span>
                                                    </div>
                        <button type="submit" class="button-green w-100 radius-8 h-40 mt-20 font-14-m">Masuk</button>
                        <p class="mt-5-2" align="right"><a href="https://kasirpintar.co.id/password/reset" class="font-14-r font-green">Lupa Password?</a></p>
                    </form>
                </div>
                <hr class="mt-30">
                <p class="font-14-r font-gray mt-20" align="center">Atau Login dengan Google</p>
                <div class="px-50">
                    <div class="g-signin2 mt-20" data-onsuccess="onSignIn" data-width="!inherit"></div>
                </div>
            </div>
        </div>     
    </section>