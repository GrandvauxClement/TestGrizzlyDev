/*
a) Ecrire un service d'appel à l'API.
    Ce service contiendra une fonction qui fera l'appel à l'API et retournera un observable.
    La fonction prend en paramètre l'url de l'API.
    En plus de l'appel à l'API, l'observable doit impérativement faire un traitement succinct du tableau retourné par l'API en ajoutant un an à l'age de chaque utilisateur avant de retourner les données.
*/
export class ApiService {
    getApi(apiURL): Observable<any> {
        let data = this.http.get < any > (apiURL);
        for (let i = 0; i < data.length; i++) {
            data[i].age += 1;
        }
        return data;

    }
}
