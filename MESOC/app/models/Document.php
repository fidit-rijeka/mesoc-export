<?php

use Phalcon\Mvc\Model;

/**
 * Products
 */
class Document extends Model
{
	/**
	 * @var integer
	 */
	public $ID_Doc;

	/**
	 * @var string
	 */
	public $PubYear;
	
	/**
	 * @var string
	 */
	public $Title;

	/**
	 * @var integer
	 */
	public $BiblioRef;

	/**
	 * @var integer
	 */
	public $Links;
	
	/**
	 * @var integer
	 */
	public $NumPages;
		
	/**
	 * @var integer
	 */
	 
	public $Summary;
	/**
	 * @var string
	 */
        /**
	 * @var string
	 */
	public $PeriodFrom;

	/**
	 * @var integer
	 */
	public $PeriodTo;

	/**
	 * @var integer
	 */
	public $Methodology;
        
        /**
	 * @var integer
	 */
	public $Relevance;
		
	/**
	 * @var integer
	 */
	 
	public $FindingOutcomes;
	/**
	 * @var string
	 */
	/**
	 * @var string
	 */
	public $Keywords;

	/**
	 * @var integer
	 */
	public $AnalytLimitation;

	/**
	 * @var integer
	 */
	public $OpenAccess;
	
	/**
	 * @var integer
	 */
	public $Scope;
		
	/**
	 * @var integer
	 */
	 
	public $ID_Original;
	/**
	 * @var string
	 */	
        /**
	 * @var string
	 */
	public $ID_Type;

	/**
	 * @var integer
	 */
	public $ID_Language;

	/**
	 * @var integer
	 */
//	public $ID_Sector;
	
	/**
	 * @var integer
	 *
	public $ID_LitArea; */
		
	/**
	 * @var integer
	 */
	public $CreatedAt;
        
        /**
	 * @var text
	 */
	public $docview;
        
        /**
	 * @var text
	 */
	public $ID_Template;

        /**
	 * @var text
	 */
	public $ID_Proposal;
        
        /**
	 * @var text
	 */
	public $DOI;
        
        /**
	 * @var text
	 */
	public $CountryPub;
        
        /**
	 * @var text
	 */
	public $Keywordtv;

        /**
	 * @var integer
	 */
	public $transitionvar;        
        
        /**
	 * @var integer
	 */
	public $city;        
	
        /**
	 * @var integer
	 */
	public $Author;        
        
        /**
	 * @var integer
	 */
	public $Institution;        
        
        /**
	 * @var integer
	 */
	public $DataProviders;        
        
        /**
	 * @var integer
	 */
	public $Technique;        
        
        /**
	 * @var integer
	 */
	public $ID_Category;        
        
        /**
	 * @var integer
	 */
	public $ID_User;        
        
        /**
	 * @var integer
	 */
	public $ID_Role;        
        
        /**
	 * @var integer
	 */
	public $ID_Partner;        
        
	/**
	 * @var integer
	 */
	public $Targetgroup;        

        /**
	 * Svojstva initializer
	 */
	public function initialize()
	{
		$this->belongsTo('ID_Language', 'Language', 'ID_Language', [
			'reusable' => true
		]);
                                
                $this->belongsTo('ID_Type', 'Type', 'ID_Type', [
			'reusable' => true
		]);
                                
                $this->hasMany('ID_Doc', 'Docsector', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Sector'
        	 ]
                ]);  
                
                $this->hasMany('ID_Doc', 'Docauthor', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Author'
        	 ]
                ]);
	
                $this->hasMany('ID_Doc', 'Doccountry', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Research'
        	 ]
                ]);
                
                $this->hasMany('ID_Doc', 'Docinstitution', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Instituition'
        	 ]
                ]);
                
                $this->hasMany('ID_Doc', 'Docsearchdatabase', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Search database'
        	 ]
                ]);
                
                $this->hasMany('ID_Doc', 'Docdataprov', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Document provider'
        	 ]
                ]);
                
                $this->hasMany('ID_Doc', 'Doctechnique', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Technique'
                    ]
              ]); 
                $this->hasMany('ID_Doc', 'Documentculturaldomain', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Cultural sector'
                    ]
              ]); 

                $this->hasMany('ID_Doc', 'Documentsocialimpact', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Cross-over theme'
                    ]
              ]); 
                $this->hasMany('ID_Doc', 'Upload', 'ID_Doc', [
          	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Document'
        	]
              ]); 
                $this->hasMany('ID_Doc', 'Doccity', 'ID_Doc', [
          	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it\'s used in Document - city'
        	]
              ]); 
                $this->belongsTo('ID_Category', 'Category', 'ID_Category', [
			'reusable' => true
		]);
		 $this->hasMany('ID_Doc', 'Documentextented', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it is used in Documentextented'
        	 ]
              ]);
		 $this->hasMany('ID_Doc', 'Doctransitionvar', 'ID_Doc', [
        	'foreignKey' => [
        		'message' => 'Document cannot be deleted because it is used in Doctransitionvar'
        	 ]
              ]);
                
  	
        }
	/**
	 * Djela initializer
	 /
	public function initialize2()
	{
		$this->belongsTo('sifradjela', 'Product_types', 'id', [
			'reusable' => true
		]);
	}  */
	
	/**
	 * Returns a human representation of 'active'
	 *
	 * @return string
	 */
	public function getActiveDetail()
	{
		if ($this->active == 'Y') {
			return 'Yes';
		}
		return 'No';
	}
}
