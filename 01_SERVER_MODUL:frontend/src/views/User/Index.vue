<template>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Gaming Portal</title>
    <link rel="stylesheet" href="../../public/Vendor/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/Vendor/css/style.css">
  </head>
  <body>

   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">Gaming Portal</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

         <li><a href="discover-games.html" class="nav-link px-2 text-white">Discover Games</a></li>
         <li><a href="manage-games.html" class="nav-link px-2 text-white">Manage Games</a></li>
         <li><a href="profile.html" class="nav-link px-2 text-white">User Profile</a></li>
         <li class="nav-item">
           <a class="nav-link active bg-dark" href="#">Welcome, Player1</a>
         </li>
         <li class="nav-item">
          <a @click="logout" class="btn bg-white text-primary ms-4">Sign Out</a>
         </li>
       </ul>
      </div>
    </nav>

    <main>

      <div class="hero py-5 bg-light">
         <div class="container text-center">
          <h1 class="mb-0 mt-0">Dashboard</h1>
         </div>
      </div>

      <div class="list-form py-5">
         <div class="container">
          <h5 class="alert alert-info">
            Welcome, Administrator. Don't forget to sign out when you are finished using this page
          </h5>
         </div>
      </div>

    </main>



  </body>
</html>
</template>
<script lang="ts">
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
export default {
  setup() {
 const router = useRouter();
    function logout() {
      localStorage.removeItem('token');
      localStorage.removeItem('role');
      router.push('/signin')
    }

    return {
      logout
    }
  }
}
</script>