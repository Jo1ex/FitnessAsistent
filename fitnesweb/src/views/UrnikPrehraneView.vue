<template>
  <v-app id="/reg">
      <v-toolbar 
    dense
    color="#009999"
    dark
    >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-send-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/nastavitve">
        <v-icon>mdi-cog-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-plus-box-outline</v-icon>
      </router-link>
      
      <v-spacer></v-spacer>
      
      <v-toolbar-title>URNIK PREHRANE</v-toolbar-title>

      <v-spacer></v-spacer>

      <router-link to="/urnikvadbe">
        <v-icon>mdi-account-circle</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-calendar</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-format-align-justify</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </v-toolbar>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="30" sm="30" md="30">
            
          <v-row>
            <v-card
              class="mx-auto"
              color="white"
              light
              max-width="1000"
              width="1000"
              height="850"
            >
            <v-sheet
      tile
      height="54"
      class="d-flex"
      rounded
    >
      <v-btn
        icon
        class="ma-2"
        @click="$refs.calendar.prev()"
      >
        <v-icon>mdi-chevron-left</v-icon>
      </v-btn>
      <v-select
        v-model="type"
        :items="types"
        dense
        outlined
        hide-details
        class="ma-2"
        label="vrsta"
      ></v-select>
      <v-select
        v-model="mode"
        :items="modes"
        dense
        outlined
        hide-details
        label="način prekrivanja dogodkov"
        class="ma-2"
      ></v-select>
      <v-select
        v-model="weekday"
        :items="weekdays"
        dense
        outlined
        hide-details
        label="dnevi v tednu"
        class="ma-2"
      ></v-select>
      <v-spacer></v-spacer>
      <v-btn
        icon
        class="ma-2"
        @click="$refs.calendar.next()"
      >
        <v-icon>mdi-chevron-right</v-icon>
      </v-btn>
    </v-sheet>
              <v-row>
              <v-card
                class="mx-auto ma-5 ml-7"
                color="#EFEFEF"
                light 
                width="570"
                elevation="5"
                height="750"
                >
                  <div>
                    <v-card-text class="text-h5" >Danasnja prehrana</v-card-text>
                    <v-card
                    class="mx-3"
                    color="#EFEFEF"
                    light 
                    elevation="5"
                    >
                    <v-card-text class="text-h6" >Kalorije</v-card-text>
                    <v-progress-linear
                      background-color="#F7F8F8"
                      height=10
                      rounded
                      v-model="valueDeterminate"
                      color="#2C6763"
                      mx-3
                    ></v-progress-linear>
                    
                    <v-card-text class="text-h6" >Protenini</v-card-text>
                    <v-progress-linear
                      background-color="#F7F8F8"
                      height=10
                      rounded
                      v-model="valueDeterminate"
                      color="#2C6763"
                    ></v-progress-linear>
                    
                    <v-card-text class="text-h6" >Mascobe</v-card-text>
                    <v-progress-linear
                      background-color="#F7F8F8"
                      height=10
                      rounded
                      v-model="valueDeterminate"
                      color="#2C6763"
                    ></v-progress-linear>
                    
                    <v-card-text class="text-h6" >Ogljikovi hidrati</v-card-text>
                    <v-progress-linear
                      background-color="#F7F8F8"
                      height=10
                      rounded
                      v-model="valueDeterminate"
                      color="#2C6763"
                    ></v-progress-linear>
                    <br>
                    </v-card>
                    <v-card
                      class="mx-3 text-center ma-5"
                      color="#009999"
                      dark
                      max-width="600"
                      
                    >
                      <v-card-text>
                        <v-sheet color="white">
                          <v-sparkline
                            :value="value"
                            color="rgba(0, 208, 193, .7)"
                            height="160"
                            padding="20"
                            stroke-linecap="round"
                            smooth
                          >
                            <template v-slot:label="item">
                              ${{ item.value }}
                            </template>
                          </v-sparkline>
                        </v-sheet>
                      </v-card-text>

                      

                      <v-divider></v-divider>
                    </v-card>
                    <br>
                  </div>
                </v-card>
                <v-card
                class="mx-auto ma-5 mr-7"
                color="#EFEFEF"
                light 
                width="370"
                elevation="5"
                >
                </v-card>
              </v-row>
              </v-card>
              
              
              
 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <v-card
              class="mx-auto"
              color="#ECECEC"
              light
              max-width="600"
              width="600"
              height="850"
              >
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Zajtrk
                    </v-expansion-panel-header>
                      
                        
                        
                      <v-expansion-panel-content>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                      
                
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Kosilo
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                      
                      
                
                
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Solate
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                
                
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Proteinski sejki
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Prigrizki
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Vecerja
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
          
              </v-card>

          </v-row>
          

          </v-col>
        </v-row>
      </v-container>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>
<script>
  export default {
    data: () => ({
      type: 'month',
      types: ['mesec', 'teden', 'dan', '4dni'],
      mode: 'stack',
      modes: ['sklad', 'stolpec'],
      weekday: [0, 1, 2, 3, 4, 5, 6],
      weekdays: [
        { text: 'Ned - Sob', value: [0, 1, 2, 3, 4, 5, 6] },
        { text: 'Pon - Ned', value: [1, 2, 3, 4, 5, 6, 0] },
        { text: 'Pon - Pet', value: [1, 2, 3, 4, 5] },
        { text: 'Pon, Sre, Pet', value: [1, 3, 5] },
      ],
      value: '',
      events: [],
      colors: ['#00A99D'],
      names: ['Prsa', 'Triceps', 'Ramena', 'Biceps', 'Hrbtne misice', 'Four-arm', 'Noge', 'Trebusnjaci'],
    }),
    methods: {
      getEvents ({ start, end }) {
        const events = []

        const min = new Date(`${start.date}T00:00:00`)
        const max = new Date(`${end.date}T23:59:59`)
        const days = (max.getTime() - min.getTime()) / 86400000
        const eventCount = this.rnd(days, days + 20)

        for (let i = 0; i < eventCount; i++) {
          const allDay = this.rnd(0, 3) === 0
          const firstTimestamp = this.rnd(min.getTime(), max.getTime())
          const first = new Date(firstTimestamp - (firstTimestamp % 900000))
          const secondTimestamp = this.rnd(2, allDay ? 288 : 8) * 900000
          const second = new Date(first.getTime() + secondTimestamp)

          events.push({
            name: this.names[this.rnd(0, this.names.length - 1)],
            start: first,
            end: second,
            color: this.colors[this.rnd(0, this.colors.length - 1)],
            timed: !allDay,
          })
        }

        this.events = events
      },
      getEventColor (event) {
        return event.color
      },
      rnd (a, b) {
        return Math.floor((b - a + 1) * Math.random()) + a
      },
    },
  }
</script>
<script>
  export default {
    data: () => ({
      value: [
        423,
        446,
        675,
        510,
        590,
        610,
        760,
      ],
    }),
  }
</script>