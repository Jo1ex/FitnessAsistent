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
      
      <v-toolbar-title>URNIK VADBE</v-toolbar-title>

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
              color="#ECECEC"
              light
              max-width="1000"
              width="1000"
              height="700"
            >
                <div>
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
    <v-sheet height="600">
      <v-calendar
        ref="calendar"
        v-model="value"
        :weekdays="weekday"
        :type="type"
        :events="events"
        :event-overlap-mode="mode"
        :event-overlap-threshold="30"
        :event-color="getEventColor"
        @change="getEvents"
      ></v-calendar>
    </v-sheet>
  </div>
            
              </v-card>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <v-card
              class="mx-auto"
              color="#ECECEC"
              light
              max-width="600"
              width="600"
              height="700"
              >
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Push
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        
                        <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Prsa
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
                      Triceps
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
                      Ramena
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                      
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                
                
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Pull
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Biceps
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
                      Hrbtne misice
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
                      Four arm
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
                
                
                <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Legs
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        <v-expansion-panels rounded class="mt-3">
                  <v-expansion-panel
                    v-for="(item,i) in 1"
                    :key="i"
                  >
                    <v-expansion-panel-header>
                      Noge
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
                      Trebusnjaci
                    </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </v-expansion-panel-content>
                    
                  </v-expansion-panel>
                </v-expansion-panels>
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