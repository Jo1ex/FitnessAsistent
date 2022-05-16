<template>
  <v-app id="/reg">
    
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h4
                          color=#00A99D class="text-center display-2 teal--text text--accent-3"
                        >Gremo dokoncati tvoj racun!</h4>

                        <h4 class="text-center mt-15">S vpisovanjem teh podatkov nam boš pomagal izbrati najboljše vaje za tebe. </h4>
  
                        <v-form>
                          
                            <v-row align="center">
                              
                                <v-select
                                  :items="items"
                                  label="Spol*"
                                  prepend-inner-icon="mdi-account-outline"
                                ></v-select>
                              

                            </v-row>
                        
                        <v-form>
                        <v-text-field
                            label="Datim rojstva*"
                            name="Datim rojstva"
                            prepend-inner-icon="mdi-calendar"
                            type="text"
                            color="teal accent-2"
                          />
                        
                          
                          <v-form>

                          <v-text-field
                            label="Teza*"
                            name="Teza"
                            prepend-inner-icon="mdi-database"
                            type="text"
                            color="teal accent-2"
                          />

                          <v-text-field
                            label="Visina*"
                            name="Visina"
                            prepend-inner-icon="mdi-ruler"
                            type="text"
                            color="teal accent-2"
                          />
                          </v-form>

                          
                        </v-form>
                        </v-form>
                      
                        
                        <router-link to="/" tag="button" outlined><v-btn color="white" elevation="5" outlined x-large bold >Potrdite</v-btn></router-link>
                      </v-card-text>
                      
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
            
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
        'Zenski',
        'Moski',
      ],
      checkbox: false,
    }),
  }
</script>