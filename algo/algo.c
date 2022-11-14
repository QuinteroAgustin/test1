#include <stdio.h>
int main()
{  
    int valMax = 0;
    int val;
    int position;
    for(int i = 1; i<6; i++){
        printf("Saisir le %d nombre : \n", i);
        scanf("%d", &val);
        if(valMax < val){
            valMax = val;
            position = i;
        }
    }

    printf("La valeur max est : %d\n Cette valeur ce situe à la %d position\n", valMax, position);

    return 0;
}