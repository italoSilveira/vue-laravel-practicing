<template>
  <div id="pageBook">
    <v-container grid-list-xl fluid>
      <v-layout row wrap>
        <v-flex lg4 sm12>
        <v-img :src="require('../static/people/man/m1.jpg')" height="390">
            <v-layout column class="media ma-0">
              <v-card-title>
                <v-spacer></v-spacer>
                <v-btn dark icon class="mr-3">
                  <v-icon>edit</v-icon>
                </v-btn>
              </v-card-title>
              <v-spacer></v-spacer>
              <v-card-title class="white--text pl-5 pt-5">
                <div class="display-1 pl-5 pt-5">Ali Conners</div>
              </v-card-title>
            </v-layout>
          </v-img>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>

  export default {
    layout: 'dashboard',
    components: {
    },
    data: () => ({}),
    computed: {
    },

  };
</script>
