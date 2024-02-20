<?php
namespace App\Service;

class ChoicesProvider
{
    public function getChoices(): array
    {
        $jsonString = '["Front-end", "Back-end", "Full-stack", "Product Owner", "PMO", "UI/UX", "Graphique", "Analyse de données", "Machine Learning", "JavaScript", "Python", "Java", "C#", "React", "Angular", "Vue.js", "Django", "Docker", "Git", "Jenkins", "Sur site", "Télétravail", "Amérique du Nord", "Europe", "Asie", "Télétravail global"]';
        $optionsArray = json_decode($jsonString, true);
        
        $choices = $choices = array_combine($optionsArray, $optionsArray);
    
        
        // Parsing logic here to fill $choices...

        return $choices;
    }
}