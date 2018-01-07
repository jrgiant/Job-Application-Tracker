const fs = require('fs');

class JAM {
  constructor() {
    this.defaults = {
      /** Step up database*/
      db:{
        type:"pg"
      }
    }// end of defaults
    this.config={};
  }// end of constructor
  init(){
    const config_js = './jam.config.js';
    if(fs.existsSync(config_js)){
      const {config} = require(config_js);
      const CFG = Object.assign({},this.defaults, config);


    }
  }
}//end of class JAM
export {JAM as default};
