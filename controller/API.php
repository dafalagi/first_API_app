<?php
    class API {
        public function searchYoutube($data) {
            error_reporting (E_ALL ^ E_NOTICE);

            /*Just for your server-side code*/
            header('Content-Type: text/html; charset=ISO-8859-1');

                $q = rawurlencode($data);
                
                //Its different for all users
                $myApiKey = 'AIzaSyBKx40_0ZLW8LU0lgxQx2n_a_s9gvCZj1Y';
                $googleApi =
                    'https://www.googleapis.com/youtube/v3/search?q='
                    . $q . '&key=' . $myApiKey . '&part=snippet&maxResults=10';

                /* Create new resource */
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                /* Set the URL and options */
                curl_setopt($ch, CURLOPT_URL, $googleApi);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                /* Grab the URL */
                $curlResource = curl_exec($ch);

            /* Close the resource */
                curl_close($ch);

                $response = json_decode($curlResource, true);
                return $response;
        }

        public function searchTitle($q) {
            $key = "4b8bc985";
            $title = rawurlencode($q);
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt_array($curl, [
                CURLOPT_URL => "http://www.omdbapi.com/?apikey=$key&s=$title",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ]);

            $json = curl_exec($curl);
            $response = json_decode($json, true);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
                return $errMsg = "ERROR";
            }else {
                return $response;
            }
        }

        public function searchDetail($id) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://imdb-api.com/en/API/Title/k_qm0ghu3m/$id/",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ]);

            $json = curl_exec($curl);
            $response = json_decode($json, true);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
                return $errMsg = "ERROR";
            }else {
                return $response;
            }
        }

        public function nowShowing() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://imdb-api.com/en/API/InTheaters/[KEY]",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ]);

            $json = curl_exec($curl);
            $response = json_decode($json, true);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
                return $errMsg = "ERROR";
            }else {
                return $response;
            }
        }

        public function compressImg($img) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt_array($curl, [
                CURLOPT_URL => "http://api.resmush.it/ws.php?img=$img",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ]);

            $json = curl_exec($curl);
            $response = json_decode($json, true);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
                return $errMsg = "ERROR";
            }else {
                return $response;
            }
        }
    }
?>