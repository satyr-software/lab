from audioop import reverse
from doctest import OutputChecker
from re import A


outer_code = ['URMWXOZIRGBRM7DRWGSC5WVKGS','DVZIVZFWZXRLFHRMXLMXVKGZMWNVGRXFOLFHRMVCVXFGRLN']

'''staright_alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
reversed_alpha = staright_alpha[::-1]



result = ""

for i in outer_code[0]:
    if staright_alpha.find(i) == -1:
        result = result + i
    else:
        pos = staright_alpha.find(i)
        result = result + reversed_alpha[pos]
    
print(result)


result = ""
for i in outer_code[1]:
    pos = staright_alpha.find(i)
    result = result + reversed_alpha[pos]
    
print(result)'''

def decode_print(input):
    staright_alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    reversed_alpha = staright_alpha[::-1]

    result = ""

    for i in input:
        if staright_alpha.find(i) == -1:
            result = result + i
        else:
            pos = staright_alpha.find(i)
            result = result + reversed_alpha[pos]
       

    return result

for b in outer_code:
    print(decode_print(b))

