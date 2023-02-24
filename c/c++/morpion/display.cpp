#include <iostream>
using namespace std ;

void display(char plateau[3][3]) {
    string ligne_horizontal = "---+---+---";
    string ligne_verticale = "   I   I   ";

    // Afficher les valeurs du plateau
    for (int i = 0; i < 3; i++) {
        for (int j = 0; j < 3; j++) {
            cout << " " << plateau[i][j] << " ";
            if (j < 2) {
                cout << "I";
            }
        }
        cout << endl;
        if (i < 2) {
            cout << ligne_horizontal << endl;
        }
    }
}

int displayQuestion(){
    int position;
    int x, y;
    do{
        std::cout << "Entrez une position : " << std::endl;
        std::cin >> position;
    }while(position < 0 || position > 9);
    x = position/3;
    y = position%3;
    std::cout << "Vous avez choisi la position x : "<< x << ", y: "<< y <<"." <<std::endl;
    return position;
}

bool displayError(char plateau[3][3], int position){
    int x, y;
    x = position/3;
    y = position%3;
    if(plateau[x][y] == ' '){
        return true;
    }
    std::cout << "La position est déjà prise."<< endl;
    return false;
}

void displayIaPlay(){
    std::cout << "C'est au tour de l'ordinateur de jouer."<< endl;
}

void displayMatchDraw(){
    std::cout << "Le match est nul."<< endl;
}

void displayMatchWin(){
    std::cout << "Vous avez gagné la partie!!"<< endl;
}

void displayMatchLose(){
    std::cout << "Vous avez perdu la partie."<< endl;
}