import random
with open('Chals/Linux/500/flagishere.txt', 'w') as file:
    for i in range(5000):
        if i == 523:
            file.write("\tPING{THIS_IS_THE_FAKE_FLAG}\n")
        else:
            g = random.randint(5,10000)
            file.write(f"P1NG{{Flag number: {g}}}\n")