<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\ServiceTransaction;

class ServiceTransactionController extends Controller
{
    public function parseServiceDescription($description)
    {
        // $description = "all gino is a besides man under the table from PUP";
        $description = explode(' ', trim($description));
        
        $description = array_map('strtolower', $description);
        
        $description = $this->removePrepositions($description);
        $description = $this->removeHelpingVerb($description);
        $description = $this->removePronouns($description);
        $description = $this->removeDeterminers($description);
        

        $description = array_values($description);
        return $description;
    }

    private function removePrepositions($description) 
    {
        $prepositions = [ 
                            "aboard", "about", "above", "across", "after", "against", "along", "amid", 
                            "among", "anti", "around", "as", "at", "before", "behind", "below", "beneath", 
                            "beside", "besides", "between", "beyond", "but", "by", "concerning", "considering",
                            "despite", "down", "during", "except", "excepting", "excluding", "following", "for", 
                            "from", "in", "inside", "into", "like", "minus", "near", "of", "off", "on", "onto", 
                            "opposite", "outside", "over", "past", "per", "plus", "regarding", "round", "save",
                            "since", "than", "through", "to", "toward", "towards", "under", "underneath", 
                            "unlike", "until", "up", "upon", "versus", "via", "with", "within", "without"
                        ];

        foreach ($prepositions as $preposition) {
            if(($key = array_search(strtolower($preposition), $description)) !== false) {
                unset($description[$key]);
            }
        }

        return $description;
    }

    private function removeHelpingVerb($description) 
    {
        $helpingVerbs = [
                            "am", "are", "is", "was", "were", "be", "being", "been", "have", "has", 
                            "had", "shall", "will", "do", "does", "did", "may", "must", "might", "can",
                            "could", "would", "should" 
                        ];

        foreach ($helpingVerbs as $helpingVerb) {
            if(($key = array_search(strtolower($helpingVerb), $description)) !== false) {
                unset($description[$key]);
            }
        }

        return $description;
    }

    private function removePronouns($description)
    {
        $pronouns = [ 
                        "all", "another", "any", "anybody", "anyone", "anything", "both", "each", 
                        "other", "either", "everybody", "everyone", "everything", "few", "he", "her", 
                        "hers", "herself", "him", "himself", "his", "I", "it", "its", "itself", "little",
                        "many", "me", "mine", "more", "most", "much", "my", "myself", "neither", "no", 
                        "one", "nobody", "none", "nothing", "one", "other", "others", "our", "ours", 
                        "ourselves", "several", "she", "some", "somebody", "someone", "something", "that",
                        "their", "theirs", "them", "themselves", "these", "they", "this", "those", "us",
                        "we", "what", "whatever", "which", "whichever", "who", "whoever", "whom", "whomever", 
                        "whose", "you", "your", "yours", "yourself", "yourselves" 
                    ];

        foreach ($pronouns as $pronoun) {
            if(($key = array_search(strtolower($pronoun), $description)) !== false) {
                unset($description[$key]);
            }
        }

        return $description;
    }

    private function removeDeterminers($description)
    {
        $determiners = [ 
                            "the", "a", "an", "another", "no", "the", "a", "an", "no", "another", 
                            "some", "any", "my", "our", "their", "her", "his", "its", "another", "no", 
                            "each", "every", "certain", "its", "another", "no", "this", "that" 
                        ];

        foreach ($determiners as $determiner) {
            if(($key = array_search(strtolower($determiner), $description)) !== false) {
                unset($description[$key]);
            }
        }

        return $description;
    }


   public function getRequest(Request $request)
   {
        $data = $request->only('field', 'description');

        $tags = $this->parseServiceDescription($data['description']);

        die(var_dump($tags));
        // $parsed = $this->parseServiceDescription($request->description);
   } 
}
