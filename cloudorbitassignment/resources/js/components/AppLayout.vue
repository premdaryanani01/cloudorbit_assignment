<template>
    <div>
        <nav class="main_nav">
            <router-link to="/invoices-index">View all Invoices</router-link>
            <router-link to="/insert-new-invoice">Create a New Invoices</router-link>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'AppLayout',
    mounted() {
        console.log('Vue component mounted!');
    }
};
</script>

<style>
/* Add styles here if needed */

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
p,a,button,input,h1,h2,h3,h4{
    font-family: "Noto Sans", sans-serif;
    text-align:center;
}
.main_nav{
    display:flex;
    flex-direction:row;
    gap:2rem;
    place-content:center;
}
.main_nav a,.main_nav a:visited{
    text-decoration:none;
    color:#2c2c2c;
    font-size:1.25rem;
}

</style>
