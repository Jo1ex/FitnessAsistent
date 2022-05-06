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
      
      <v-text-field
            class="mt-6"
            placeholder="Search:"
            solo
            rounded
            dense
            light
            justify=center
            align=center
          >
          </v-text-field>

      <v-spacer></v-spacer>

      <router-link to="/urnikvadbe">
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
          <v-col cols="30" sm="30" md="30">
            
            
            <v-card
              class="mx-auto"
              color="#ECECEC"
              light
              width="1500"
              height="700"
              align=center
            >
              <v-row>
                <v-card
                class="mx-7 my-12"
                color="#D2D2D2"
                light
                width="700"
                height="500"
                >
                <v-row>
                  <v-card-title>VAJA</v-card-title>
                  <v-col 
                  align="center" 
                  class="d-flex"
                  cols="8"
                  sm="6"
                  >         
                    <v-select
                      attach
                      solo
                      chips
                      multiple
                      clearable
                      deletable-chips
                      :items="items"
                      prepend-title="Vaja"
                      label="Izberite vaje"
                      class="my-8"
                    ></v-select>
                  </v-col>
                </v-row>
                </v-card>
                <v-card
                class="mx-7 my-12"
                color="#D2D2D2"
                light
                width="700"
                height="500">
                <v-row>
                  <v-card-title>URA</v-card-title>
                  <v-col 
                  align="center" 
                  class="d-flex"
                  cols="8"
                  sm="3"
                  >       
                    
                      
                    <v-select
                      class="my-8"
                      attach
                      solo
                      clearable
                      deletable-chips
                      :items="odu"
                      prepend-title="Vaja"
                      label="OD"
                    ></v-select>
                    
                  </v-col>
                  <v-col 
                  align="center" 
                  class="d-flex"
                  cols="8"
                  sm="3"
                  >       
                    
                      
                    <v-select
                      attach
                      solo
                      clearable
                      deletable-chips
                      :items="dou"
                      prepend-title="Vaja"
                      label="DO"
                      class="my-8"
                    ></v-select>
                    
                  </v-col>
                  </v-row>
                  
                  <v-row >
                    <v-card-title>DATUM</v-card-title>
                  <v-col 
                  align="center" 
                  class="d-flex"
                  cols="8"
                  sm="3"
                  >       
                    
                      
                    <v-select
                      attach
                      solo
                      clearable
                      deletable-chips
                      :items="odd"
                      prepend-title="Vaja"
                      label="OD"
                      class="my-8"
                    ></v-select>
                    
                  </v-col>
                  
                  <v-col 
                  align="center" 
                  class="d-flex"
                  cols="8"
                  sm="4"
                  >       
                    
                      
                    <v-select
                      attach
                      solo
                      clearable
                      deletable-chips
                      :items="dod"
                      prepend-title="Vaja"
                      label="DO"
                      class="my-8"
                    ></v-select>
                    
                  </v-col>
                  </v-row>

                </v-card>
              </v-row>
              <v-btn
                elevation="2"
                width=300
                height=80
                color=#2C6763
                dark
              >USTVARI</v-btn>
          </v-card>



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
      name: '',
      email: '',
      select: null,
      items: [
        'Vaja1',
        'Vaja2',
        'Vaja3',
        'Vaja4',
        'Vaja5',
        'Vaja6',
        'Vaja7',
        'Vaja8',
        'Vaja9',
        'Vaja10',
        'Vaja11',
        'Vaja12',
        'Vaja13',
        'Vaja14',
        'Vaja15',
        'Vaja16',
      ],
      odu: [
        '00',
        '01',
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08',
        '09',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
      ],
      dou: [
        '00',
        '01',
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08',
        '09',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
      ],
      odd: [
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
        '24',
        '25',
        '26',
        '27',
        '28',
        '29',
        '30',
        '31',
      ],
      dod: [
        'januar',
        'februar',
        'marec',
        'april',
        'maj',
        'junij',
        'julij',
        'avgust',
        'september',
        'oktober',
        'november',
        'december',
      ],
      checkbox: false,
    }),
  }
</script>
