<template>
  <v-app id="/registracija">
    
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          color=#00A99D class="text-center display-2 teal--text text--accent-3"
                        >Menjava gesla!</h1>
                        
                        <h4 class="text-center mt-4">Vpisite svoj email za prijavo</h4>
                        <v-form>
                          <v-text-field
                            label="Email naslov*"
                            name="Email"
                            prepend-icon="mdi-mail"
                            type="text"
                            color="teal accent-2"
                          />

                          <v-text-field
                            id="Novo geslo"
                            label="Novo geslo*"
                            name="Novo geslo"
                            prepend-icon="mdi-key"
                            type="Geslo"
<<<<<<< HEAD
                            counter="30"
=======
>>>>>>> b2f8e233d37015321620b9f9714e880dc720f3c0
                            color="teal accent-2"
                          />

                          <v-text-field
                            id="Potrditev gesla"
                            label="Potrditev gesla*"
                            name="Potrditev gesla"
                            prepend-icon="mdi-key"
                            type="Geslo"
<<<<<<< HEAD
                            counter="30"
=======
>>>>>>> b2f8e233d37015321620b9f9714e880dc720f3c0
                            color="teal accent-2"
                          />
                        </v-form>
                        
                      </v-card-text>
                      <div class="text-center mt-3">
                        <v-btn color="#00A99D" elevation="5" outlined x-large bold >Zamenjaj geslo</v-btn>
                      </div>
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