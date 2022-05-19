<?php
    namespace Src\Controller;
    
    class OrganizeArray{
        function ArrayOrganized($QueryResults){  
            $ArrayOrganized = array();    
            foreach($QueryResults as $FinalQueryJsonResults){   
                $QueryJsonResults = json_encode($FinalQueryJsonResults);   
                $FullQueryPegMatch =  preg_match_all("/$FinalQueryJsonResults/iu", $QueryJsonResults); 
                array_push($ArrayOrganized, array(   
                    "score"=>$FullQueryPegMatch,   
                    "id"=>$FinalQueryJsonResults["id"],    
                    "cover_img"=>$FinalQueryJsonResults["cover_img"],   
                    "title"=>$FinalQueryJsonResults["title"],  
                    "description"=>$FinalQueryJsonResults["description"], 
                    "category"=>$FinalQueryJsonResults["category"],  
                    "written_by"=>$FinalQueryJsonResults["written_by"],   
                    "date"=>$FinalQueryJsonResults["date"] 
                ));
            }
            return $ArrayOrganized;
        }
    }
?>