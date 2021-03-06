<?php
    namespace Src\Controller;
    
    class Pagination{

        function Page($Array, $CurrentPage, $ResultPerPage)
        {
            //Get total of array
            $TotalPagination = count($Array);
            $CurrentPage = $_GET['page'];

            if($CurrentPage === " " || $CurrentPage === 0)
            {
                $CurrentPage === 1;
            }

            $ResultPerPage = $ResultPerPage;
            $Total = ceil($TotalPagination / $ResultPerPage);
            $Offset = ($CurrentPage - 1) * $ResultPerPage;

            $PrintPagination = array_slice($Array, $Offset, $ResultPerPage);
            
            
            for($Zero = 1; $Zero<=$Total; $Zero++)
            {
                echo '<a href="Search.php?page='.$Zero.'">'.$Zero.'</a>';
            }
        }

        function PageIntoQueue($ArrayOrganized, $hg){
            $Queue = new \Ds\Queue();
            for($Start = 0; $Start < count($ArrayOrganized); $Start++){
                if($ArrayOrganized[$Start]["score"] === $hg[$Start]){
                    $Queue->push(
                        array(
                            "id" => $ArrayOrganized[$Start]["id"],
                            "title"=>$ArrayOrganized[$Start]["title"],
                            "description"=>$ArrayOrganized[$Start]["description"],
                            "category"=>$ArrayOrganized[$Start]["category"],
                            "date"=>$ArrayOrganized[$Start]["date"],
                        )
                    );
                }
            }
            return $Queue->toArray();
        }

        function DisplayQueue($ArrayQueue){
            $FinalArrayQueue = [];
            
            for($Low = 0; $Low < count($ArrayQueue); $Low++){
                array_push($FinalArrayQueue, [
                    "Id" => $ArrayQueue[$Low]["id"],
                    "Title" => $ArrayQueue[$Low]["title"],
                    "Description" => $ArrayQueue[$Low]["description"],
                    "Category" => $ArrayQueue[$Low]["category"],
                    "written_by" => $ArrayQueue[$Low]["written_by"],
                    "Date" => $ArrayQueue[$Low]["date"]
                ]);
            }
            //return var_dump($ArrayQueue);
            return $FinalArrayQueue;
            //$url = $_SERVER['REQUEST_URI'];
            //$url = explode("/", $url);
        }
    }
?>