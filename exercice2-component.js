/*
 b) Ecrire également un component basique qui importera le service et utilisera la fonction d'appel à l'API pour afficher les données.
*/

import {ApiService} from "./exercice2-service";

export class ApiComponent {
    constructor(private apiService: ApiService) {
    }
    ApiData(){
        return this.apiService.getApi('http://127.0.0.1:8000')
    }

}