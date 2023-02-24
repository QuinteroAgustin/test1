//Evaluation 24/02/2023
//Quintero agustin
//Exercice 2 : imprimantes
#include <iostream>
using namespace std ;


float calculPrix(float imprimente, float prixPage, float nbPages){
    float total = 0;
    total = imprimente + (prixPage*nbPages);
    return total;
}

int main()
{
    //Déclaration des variables 
    float loyerImpriment1, prixMonoImpriment1, prixCouleurImpriment1;
    float loyerImpriment2, prixMonoImpriment2, prixCouleurImpriment2;
    float nbPagesMono;
    float nbPagesCouleur;
    float result1, result2;
    //initialisation des prix
    loyerImpriment1 = 149;
    prixMonoImpriment1 = 0.0075;
    prixCouleurImpriment1 = 0.075;

    loyerImpriment2 = 89;
    prixMonoImpriment2 = 0.019;
    prixCouleurImpriment2 = 0.11;

    cout << "Entrez le nombre de page Monochrome a imprimer/mois : " << endl;
    cin >> nbPagesMono;
    cout << "Entrez le nombre de page Couleur a imprimer/mois : " << endl;
    cin >> nbPagesCouleur;

    result1 = calculPrix(loyerImpriment1, prixMonoImpriment1, nbPagesMono) + calculPrix(loyerImpriment1, prixCouleurImpriment1, nbPagesCouleur);

    result2 = calculPrix(loyerImpriment2, prixMonoImpriment2, nbPagesMono) + calculPrix(loyerImpriment2, prixCouleurImpriment2, nbPagesCouleur);

    if(result1 > result2){
        cout << "L'imprimante la plus interessante pour vous est la HP MFP M 575F, pour un total de : "<< result2 << " euros par mois." << endl;
    }else{
        cout << "L'imprimante la plus interessante pour vous est la HP MFP M 775F, pour un total de : "<< result1 << " euros par mois." << endl;
    }

    return 0;
}
