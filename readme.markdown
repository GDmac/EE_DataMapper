
# Proof of concept for DataMapper ORM 1.8.2. integration into EE
Test to integrate DataMapper into ExpressionEngine.  

 ! NOTE: THIS IS ONLY A PROOF OF CONCEPT !

(SideNote: DataMapper uses ID as the primary key inside ALL its models,  
Native ExpressionEngine tables don't use ID for primary key (e.g. cat_id, entry_id).  
This means that the native EE tables can't have (easily) automatically  
generated relationships with DataMapper. That being said, using DataMapper for  
your own models, could simplify your model-coding and validation a lot.  
Happy Coding Fun.

See http://datamapper.wanwizard.eu for more info on DataMapper

## Installation:  

### Install module into third_party
Copy the datamapper directory (and optional: the datamapper_test module)  
into system/expressionengine/third_party

### /system/codeigniter/system/core/common.php
load_class has to be surrounded by if(function_exists(load_class))  
datamapper overrules the load_class. (see third_party/datamapper/system)

### /index.php 
(from the datamapper manual)  
Open your the /index.php file and add the DataMapper bootstrap,  
directly BEFORE the Codeigniter bootstrap

    /* --------------------------------------------------------------------
     * LOAD THE DATAMAPPER BOOTSTRAP FILE
     * --------------------------------------------------------------------
     */
    require_once APPPATH.'third_party/datamapper/bootstrap.php';


### Datamapper_test module included
Load the SQL file into your database for some sample data.  
Activate the datamapper_test module and visit its control panel.  
The test module control panel (MCP file) shows some basic datamapper usage.

General usage: load DataMapper: $this->EE->load->library('datamapper')  
Then load and use your DataMapper models, and you're on the road  
See http://datamapper.wanwizard.eu for more info on DataMapper


## TODO
- Language support
- Enable DataMapper Extensions
- Enable DataMapper Config

regards,
GDmac

