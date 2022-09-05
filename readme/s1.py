import os
import sys

def identify(liste, idProfile):
    return 0

def verify(liste, idProfile):
    print("Verification...")
    os.system("mkdir -p ./result/")
    resultf="./result/"+liste+"-"+idProfile+".txt"
    with open(resultf, 'wt') as dataFile:
        dataFile.write("0.01")
    dataFile.close()
    return 0
    
def enrol(liste, idProfile):
    print("Model is Created")
    return 0

if __name__ == '__main__':
    if (len(sys.argv) < 4):
        print("this script take exactly three arguments, mode (0, 1 or 2), list of file, idProfile.",len(sys.argv)-1," are given")
        sys.exit(0)
    else:
        mode=str(sys.argv[1])
        liste=str(sys.argv[2])
        idProfile=str(sys.argv[3])
        if mode=='0':
            enrol(liste,idProfile)
        elif mode =='1':
            verify(liste,idProfile)
        else:
            identify(liste,idProfile)



