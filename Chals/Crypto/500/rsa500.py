import cryptomath
#p,q,n,A,E,D
#Public: n,E
#Private: D
flag = 'UNSL{M0b_10sl?}'
flag_ord=[]
for i in flag:
    flag_ord.append(ord(i))

#print(max(flag_ord))
p=29
q=11
n = p * q #=
A = (p-1)*(q-1) #=280 
E = 3
#D=(E**-1)%A
D = cryptomath.findModInverse(E,A)
#(d * e(17)) % A(280) = 1

def encrypt():
    encrypt=[]
    for x, i in enumerate(flag_ord):
        encrypt.append((i**E)%n)
    return encrypt
def decrypt(encrypted):
    decrypt=[]
    for x, i in enumerate(encrypted):
        
        decrypt.append(chr((i**D)%n))
    return decrypt

print(encrypt())
#print(decrypt(encrypt()))
#print(flag_ord)