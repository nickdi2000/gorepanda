<template>
  <div class="row">
    <div class="col-lg-10 m-auto">
      <card >
        You're in

        <button class="btn btn-danger" @click="showRecords('hi')"> Click here</button>


      </card>

      <card>
        Name: {{ name }} <br/>
        Email: {{ email }} <br/>

        <input v-model="email" >
        <br/>

        <div v-for="mov in movies">
          Movie: {{ mov }}
        </div>

      </card>
    </div>
  </div>
</template>

<script>
 import axios from 'axios'

export default {
  middleware: 'auth',

  data() {
    return {
      email: null,
      name: "Johnny",
      movies: [
        'terminat',
        'batman',
        'somethingelse'
      ]
    }
  },
  methods: {
    showRecords(v){
      let data = {"email" : this.email};
      
      axios.post('/api/gore', data)
        .then(val => {
          this.email = val.data;


        });

    }
  }


}
</script>
