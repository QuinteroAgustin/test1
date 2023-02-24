#include <iostream>
#include "display.cpp"
using namespace std ;

int main(){
    int position;
    char plateau[3][3] = {
        {' ', ' ', ' '},
        {' ', ' ', ' '},
        {' ', ' ', ' '}
    };
    // Afficher le plateau initial
    display(plateau);
    for(int i = 0; i<9; i++){
        // Modifier une case du plateau
        std::cout << endl;
        position = displayQuestion();
        if(displayError(plateau, position) == true){
            display(plateau);
        }
    }
    
    return 0;
}