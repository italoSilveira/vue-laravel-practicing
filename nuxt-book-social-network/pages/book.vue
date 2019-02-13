<template>
  <div id="pageBook">
    <v-container grid-list-xl fluid>
      <v-layout column>
        <v-flex xs6>
          <v-widget title="Game of Thrones">
            <div slot="widget-content">
              <v-layout row wrap align-content-start>
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
                <v-flex xs8>
                  <p align="justify">
                    A Song of Ice and Fire takes place in a fictional world in which seasons last for years and end unpredictably. Nearly three centuries before the events of the first novel, the Seven Kingdoms of Westeros were united under the Targaryen dynasty by Aegon I and his sister wives Visenya and Rhaenys, establishing military supremacy through their control of dragons. Aegon became the first king of the entire continent of Westeros, save for the southerly region of Dorne. The Targaryen dynasty ruled for three hundred years, although civil war and infighting between the Targaryens resulted in the death of all their dragons. At the beginning of A Game of Thrones, 15 peaceful years have passed since the rebellion led by Lord Robert Baratheon that deposed and killed the last Targaryen king, Aerys II "the Mad King", and proclaimed Robert king of the Seven Kingdoms, with a nine-year-long summer coming to an end.

The principal story chronicles the power struggle for the Iron Throne among the great Houses of Westeros following the death of King Robert in A Game of Thrones. Robert's heir apparent, the 13-year-old Joffrey, is immediately proclaimed king through the machinations of his mother, Queen Cersei Lannister. When Lord Eddard "Ned" Stark, Robert's closest friend and chief advisor, discovers that Joffrey and his siblings are the product of incest between Cersei and her twin brother Jaime "The Kingslayer" Lannister, Eddard attempts to unseat Joffrey, but is betrayed and executed for treason. In response, Robert's brothers Stannis and Renly both lay separate claims to the throne. During this period of instability, two of the Seven Kingdoms of Westeros attempt to become independent from the Iron Throne: Eddard's eldest son Robb is proclaimed King in the North, while Lord Balon Greyjoy desires to recover the sovereignty of his region, the Iron Islands. The so-called "War of the Five Kings" is in full progress by the middle of the second book, A Clash of Kings.

The second part of story takes place in the far north of Westeros, where an 8,000-year-old wall of ice, simply called "the Wall", defends the Seven Kingdoms from supernatural creatures known as the Others. The Wall's sentinels, the Sworn Brotherhood of the Night's Watch, also protect the realm from the incursions of the "wildlings" or "Free Folk", who are several human tribes living on the north side of the Wall. The Night's Watch story is told primarily through the point of view of Jon Snow, Lord Eddard Stark's bastard son.[8] Jon follows the footsteps of his uncle Benjen Stark and joins the Watch at a young age, rising quickly through the ranks. He eventually becomes Lord Commander of the Night's Watch. In the third volume, A Storm of Swords, the Night's Watch storyline becomes increasingly entangled with the War of the Five Kings.

The third storyline follows Daenerys Targaryen, daughter of Aerys II, the last Targaryen king. On the continent of Essos, east of Westeros across the Narrow Sea, Daenerys is married off by her elder brother Viserys Targaryen to a powerful warlord, but slowly becomes an independent and intelligent ruler in her own right. Her rise to power is aided by the historic birth of three dragons, hatched from eggs given to her as wedding gifts. The three dragons soon become not only a symbol of her bloodline and her legitimate claim to the throne, but also devastating weapons of war, which help her in conquest of the Slaver's bay.
                  </p>
                </v-flex>
              </v-layout>
            </div>
          </v-widget>
        </v-flex>
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
