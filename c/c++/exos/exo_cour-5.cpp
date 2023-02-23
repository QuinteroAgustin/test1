#include <iostream>
char operateur = '+';
using namespace std ;

int addition(float a, float b){
    return a+b;
}
int soustraction(float a, float b){
    return a-b;
}
int multiplication(float a, float b){
    return a*b;
}
int division(float a, float b){
    return a/b;
}
int modulo(int a, int b){
    return a%b;
}

void calcul(int a, int b){
    float result;

    if(operateur == '-'){
        result = soustraction(a, b);
    }else if(operateur == '*'){
        result = multiplication(a, b);
    }else if(operateur == '/'){
        result = division(a, b);
        if(b==0){
            std::cout << "Division par zéro impossible !" << std::endl;
            result = 0;
        }
    }else if(operateur == '%'){
        result = modulo(a, b);
    }else{
        result = addition(a, b);
    }
    std::cout << "Le résultat de "<< a <<" "<< operateur << " " << b << " = " << result << std::endl;
}

int main(void){
    float a, b;
    char symb;
    std::cout << "Entrez le nb a : " << std::endl;
    cin >> a;
    std::cout << "Entrez le nb b : " << std::endl;
    cin >> b;
    std::cout << "Entrez le symbole : " << std::endl;
    cin >> symb;
    operateur = symb;

    calcul(a, b);

    return 0;
}