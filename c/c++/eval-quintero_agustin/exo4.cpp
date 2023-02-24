//Evaluation 24/02/2023
//Quintero agustin
//Exercice 4 : game
#include <iostream>
#include <ctime>
#include <cstdlib>
using namespace std ;

int random(int a){
    int randomNb(0);
    srand(time(0));
    randomNb = rand()%a;
    return randomNb;
}

int displaySaisie(){
    int nombre;
    cout << "Veillez saisir un nombre : " << endl;
    cin >> nombre;
    return nombre;
}

int displayReplay(){
    char choix;
    cout << "Voulez vous rejouer ? (y) ou autre touche" << endl;
    cin >> choix;
    if(choix == 'y' || choix == 'Y'){
        return 'Y';
    }
    return 'N';
}

int displayNbJoueurs(){
    int nombre;
    cout << "Veillez saisir le nombre de joueur : " << endl;
    cin >> nombre;
    return nombre;
}

string displayNomJoueurs(int position){
    string nom;
    cout << "Veillez saisir le nom du joueur "<< position+1 <<": " << endl;
    cin >> nom;
    return nom;
}

int findWineur(int nbJoueurs, int scores[100]){
    int min = scores[0];
    int position = 0;
    for(int i = 0; i<nbJoueurs; i++){
        if(scores[i] < min){
            min = scores[i];
            position = i;
        }
    }
    return position;
}

int main()
{   
    //déclaration
    char replay;
    do{
        //Déclaration plusieurs joueurs
        string joueurs[100];
        int scores[100];
        int nbParticipants;
        int wineur;
        nbParticipants = displayNbJoueurs();

        for(int i=0; i<nbParticipants; i++){
            joueurs[i] = displayNomJoueurs(i);
        }

        for(int i=0; i<nbParticipants; i++){
            //Déclaration a l'interier d'une partie
            int nombreAtrouver = random(1000);
            int nombreSaisie;
            int score = 0;

            cout << "Au tour du joueur " << i +1 << " de jouer !" << endl;
            do {
                nombreSaisie = displaySaisie();
                if(nombreSaisie < nombreAtrouver){
                    cout << "Le nombre est plus grand" << endl;
                }
                if(nombreSaisie > nombreAtrouver){
                    cout << "Le nombre est plus petit" << endl;
                }
                score ++;
            }while(nombreSaisie != nombreAtrouver);
            cout << "Bravo tu a gagné" << endl;
            scores[i] = score;
        }
        wineur = findWineur(nbParticipants, scores);
        cout << wineur << endl;
        cout << "Le winer est : " << joueurs[wineur] << " avec un score de " << scores[wineur] << endl;
        replay = displayReplay();
    }while(replay != 'N');//question 2 replay
    
    return 0;
}
