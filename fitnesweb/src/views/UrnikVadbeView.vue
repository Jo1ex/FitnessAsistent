<template>
  <v-app id="/reg">
      <v-toolbar 
    dense
    color="#009999"
    dark
    >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/listasporocil">
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

      <router-link to="/statusaktivnosti">
        <v-icon>mdi-account-circle</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-calendar</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikprehrane">
        <v-icon>mdi-format-align-justify</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </v-toolbar>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="30" sm="8" md="30">
            
          <v-row>
            <v-card
              class="mx-auto"
              color="white"
              light
              max-width="1000"
              width="1000"
              height="800"
            >
            
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
                   <v-sheet height="70">
        <v-toolbar
          flat
        >
          <v-btn
            outlined
            class="mr-4"
            color="grey darken-2"
            @click="setToday"
          >
            Today
          </v-btn>
          <v-btn
            fab
            text
            small
            color="grey darken-2"
            @click="prev"
          >
            <v-icon small>
              mdi-chevron-left
            </v-icon>
          </v-btn>
          <v-btn
            fab
            text
            small
            color="grey darken-2"
            @click="next"
          >
            <v-icon small>
              mdi-chevron-right
            </v-icon>
          </v-btn>
          <v-toolbar-title v-if="$refs.calendar">
            {{ $refs.calendar.title }}
          </v-toolbar-title>
          <v-spacer></v-spacer>
        </v-toolbar>
      </v-sheet>
    
      
                    
                    <v-card
                    class="mx-3"
                    color="#EFEFEF"
                    light 
                    elevation="5"
                    >
                      <v-sparkline
                        :value="value"
                        :gradient="gradient"
                        :smooth="radius || false"
                        :padding="padding"
                        :line-width="width"
                        :stroke-linecap="lineCap"
                        :gradient-direction="gradientDirection"
                        :fill="fill"
                        :type="type"
                        :auto-line-width="autoLineWidth"
                        auto-draw
                        
                      ></v-sparkline>

                      

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
                height="700"
                >
                <v-row class="fill-height">
                    <v-col>
                      
                      <v-sheet height="650">
                        <v-calendar
                          ref="calendar"
                          v-model="focus"
                          color="primary"
                          type="category"
                          category-show-all
                          :categories="categories"
                          :events="events"
                          :event-color="getEventColor"
                          @change="fetchEvents"
                        ></v-calendar>
                      </v-sheet>
                    </v-col>
                  </v-row>
                  <router-link to="/sestavaurnikavadbe">
                    <v-icon color=#2C6763 size=70>mdi-plus-circle</v-icon>
                  </router-link>
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
              height="800"
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
  const gradients = [
    ['#222'],
    ['#42b3f4'],
    ['red', 'orange', 'yellow'],
    ['purple', 'violet'],
    ['#00c6ff', '#F0F', '#FF0'],
    ['#f72047', '#ffd200', '#1feaea'],
  ]

  export default {
    data: () => ({
      width: 2,
      radius: 10,
      padding: 8,
      lineCap: 'round',
      gradient: gradients[5],
      value: [0, 2, 5, 9, 5, 10, 3, 5, 0, 0, 1, 8, 2, 9, 0],
      gradientDirection: 'top',
      gradients,
      fill: false,
      type: 'trend',
      autoLineWidth: false,
    }),
  }
</script>
<script>
  export default {
    data: () => ({
      focus: '',
      events: [],
      colors: ['#00A99D'],
      names: ['Push', 'Pull', 'Legs'],
      categories: ['John Smith'],
    }),
    mounted () {
      this.$refs.calendar.checkChange()
    },
    methods: {
      getEventColor (event) {
        return event.color
      },
      setToday () {
        this.focus = ''
      },
      prev () {
        this.$refs.calendar.prev()
      },
      next () {
        this.$refs.calendar.next()
      },
      fetchEvents ({ start, end }) {
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
            category: this.categories[this.rnd(0, this.categories.length - 1)],
          })
        }

        this.events = events
      },
      rnd (a, b) {
        return Math.floor((b - a + 1) * Math.random()) + a
      },
    },
  }
</script>
