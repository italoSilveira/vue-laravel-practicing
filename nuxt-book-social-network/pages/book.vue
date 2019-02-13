<template>
  <div id="pageBook">
    <v-container grid-list-xl fluid>
      <v-layout row wrap>
        <v-flex xs12>
          <v-widget title="Game of Thrones">
            <div slot="widget-content">
              <v-flex lg4 sm12>
                <v-img :src="require('../static/book/guerra-dos-tronos.jpg')" height="500"></v-img>
                <v-list two-line class="pa-0">
                  <v-list-tile>
                    <v-list-tile-content>
                      <v-list-tile-title>George R. R. Martin</v-list-tile-title>
                      <v-list-tile-sub-title>Author</v-list-tile-sub-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                      <v-icon>person</v-icon>
                    </v-list-tile-action>
                  </v-list-tile>
                  <v-divider inset></v-divider>
                  <v-list-tile>
                    <v-list-tile-content>
                      <v-list-tile-title>Leya</v-list-tile-title>
                      <v-list-tile-sub-title>Pubislher</v-list-tile-sub-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                      <v-icon>person</v-icon>
                    </v-list-tile-action>
                  </v-list-tile>
                  <v-divider inset></v-divider>
                  <v-list-tile>
                    <v-list-tile-content>
                      <v-list-tile-title>100</v-list-tile-title>
                      <v-list-tile-sub-title>Pages</v-list-tile-sub-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                      <v-icon>person</v-icon>
                    </v-list-tile-action>
                  </v-list-tile>
                  <v-divider inset></v-divider>
                </v-list>
                <v-list-tile>
                  <v-list-tile-content>
                    <v-list-tile-title>ISBN</v-list-tile-title>
                    <v-list-tile-sub-title>981275837283-12</v-list-tile-sub-title>
                  </v-list-tile-content>
                  <v-list-tile-action>
                    <v-icon>person</v-icon>
                  </v-list-tile-action>
                </v-list-tile>
                <v-divider inset></v-divider>
              </v-flex>
            </div>
          </v-widget>
        </v-flex>
        <!-- <v-flex lg4 sm12>
          <v-img :src="require('../static/book/guerra-dos-tronos.jpg')" height="500"></v-img>
          <v-list two-line class="pa-0">
            <v-list-tile>
              <v-list-tile-content>
                <v-list-tile-title>George R. R. Martin</v-list-tile-title>
                <v-list-tile-sub-title>Author</v-list-tile-sub-title>
              </v-list-tile-content>
              <v-list-tile-action>
                <v-icon>person</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-divider inset></v-divider>
            <v-list-tile>
              <v-list-tile-content>
                <v-list-tile-title>Leya</v-list-tile-title>
                <v-list-tile-sub-title>Pubislher</v-list-tile-sub-title>
              </v-list-tile-content>
              <v-list-tile-action>
                <v-icon>person</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-divider inset></v-divider>
            <v-list-tile>
              <v-list-tile-content>
                <v-list-tile-title>100</v-list-tile-title>
                <v-list-tile-sub-title>Pages</v-list-tile-sub-title>
              </v-list-tile-content>
              <v-list-tile-action>
                <v-icon>person</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-divider inset></v-divider>
          </v-list>
          <v-list-tile>
              <v-list-tile-content>
                <v-list-tile-title>ISBN</v-list-tile-title>
                <v-list-tile-sub-title>981275837283-12</v-list-tile-sub-title>
              </v-list-tile-content>
              <v-list-tile-action>
                <v-icon>person</v-icon>
              </v-list-tile-action>
            </v-list-tile>
            <v-divider inset></v-divider>
        </v-flex>
        <v-flex lg8 sm12>
          
        </v-flex> -->
      </v-layout>
    </v-container>
  </div>
</template>

<script>
  import VWidget from '@/components/VWidget';
  export default {
    layout: 'dashboard',
    components: {
      VWidget
    },
    data: () => ({}),
    computed: {
    },

  };
</script>
