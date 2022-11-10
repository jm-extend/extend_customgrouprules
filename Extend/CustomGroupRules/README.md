# Magento2 Add-On Module to Extend's Warranty module that disables offers based on customer groups

## Description

 You can enable this add-on , under `Store > Configuration > Extend > Customer Group Rules`.
 
 And then select for which customer groups the Extend module warranty offers should be disabled at the PDP, the cart and the minicart.
 
 Clear cache after saving the new configuration.
 

## Installation
   
   clone this repo to `app/code/Extend` (you would end up with `app/code/Extend/CustomGroupRules`):
    
  Run the standard magento commands (where applicable):

    bin/magento module:enable Extend_CustomGroupRules
    
    bin/magento setup:upgrade
    
    bin/magento setup:di:compile
    
    bin/magento setup:static-content:deploy -f  
    
    
    
