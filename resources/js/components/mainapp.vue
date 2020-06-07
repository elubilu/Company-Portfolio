<template>
    <div>
         <!-- ======= Header ======= -->
        <header id="header">
            <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><router-link to="/"><span>Your Company</span></router-link></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="/"><img src="/assets/img/logo1.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                <li class="active" v-if="$router.name =='home'"><router-link to="/">Home</router-link></li>
                <li v-else><router-link to="/">Home</router-link></li>
                <li class="active" v-if="$router.name=='about'"><router-link to="about">About Us</router-link></li>
                <li v-else><router-link to="about">About Us</router-link></li>
                <li class="active" v-if="$router.name=='team'"><router-link to="team">Our Team</router-link></li>
                <li v-else><router-link to="team">Our Team</router-link></li>
                <li class="active" v-if="$router.name=='contact'"><router-link to="contact">Contact</router-link></li>
                <li v-else><router-link to="contact">Contact</router-link></li>

                </ul>
            </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->
    	<router-view/>
    </div>
</template>

<script>

</script>