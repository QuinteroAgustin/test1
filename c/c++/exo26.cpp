#include <iostream>
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

void calcul(int a, int b, string symbole){
    float result;

    if(symbole == "-"){
        result = soustraction(a, b);
    }else if(symbole == "*"){
        result = multiplication(a, b);
    }else if(symbole == "/"){
        result = division(a, b);
        if(b==0){
            std::cout << "Division par zéro impossible !" << std::endl;
            result = 0;
        }
    }else if(symbole == "%"){
        result = modulo(a, b);
    }else{
        result = addition(a, b);
    }
    std::cout << "Le résultat de "<< a <<" "<< symbole << " " << b << " = " << result << std::endl;
}

int main(void){
    float a, b;
    string symbole;

    std::cout << "Entrez le nb a : " << std::endl;
    cin >> a;
    std::cout << "Entrez le nb b : " << std::endl;
    cin >> b;
    std::cout << "Entrez le symbole : " << std::endl;
    cin >> symbole;

    calcul(a, b, symbole);

    return 0;
}