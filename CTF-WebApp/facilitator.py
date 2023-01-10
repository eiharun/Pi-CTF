
def points_pages():#facilitator for the individual challenge html pages
    points = [100,200,300,400,500]
    cats = ['Crypto', 'Forensics', 'Linux', 'OSINT', 'Web', 'Misc']
    jep = {}
    for i in cats: #creates the jeapordy dictionary
        jep[i]=points
    
    for k,v in jep.items():
        for i in v:
            cfile = f'CTF-WebApp/Table/{k}-{i}.html'
            with open(cfile, 'w') as file:
                file.write(f"<!DOCTYPE html>\n")#Note: Create html page here
                file.write("<html>\n")
                file.write(f"<title>{k}: {i}</title><head><h1 font-size=\"20px\">{k}: {i} Points</h1></head>\n")
                
                file.write("<body>\n")
                file.write("<h4>Description:  </h4>\n")
                file.write("<a href=\"l\"> input link to challenge</a>\n")
                file.write("<p>Flag format is: PING{xxxxxxxx}<br>\n Go back to index.html to submit\n</p>\n")
                file.write("</body>\n")
                file.write("</html>\n")

#points_pages()
points = [100,200,300,400,500]
cats = ['Crypto', 'Forensics', 'Linux', 'OSINT', 'Web', 'Misc']
name={}
for i in points:
    for n in cats:
        name[str(n) +'-'+str(i)+'-flag']=[n,str(i),"hide"+n[0:1]+str(i)[0:1]]
    #i=full name
    #name[i][0]=category
    #name[i][1]=points
    #name[i][2]=hideVar
def validate():
    
    with open('CTF-WebApp/test.php', 'w') as file:
        for i in name:
            file.write("if(isset($_POST['"+str(i)+"'])){\n")
            file.write("\tunset($_SESSION['"+name[i][2]+"']);\n")
            file.write("\tif($_POST['"+str(i)+"']==$"+name[i][0]+"[\""+name[i][1]+"\"]){\n\n")
            file.write("\t\t$_SESSION['score'] = $_SESSION['score']+"+name[i][1]+";\n")
            file.write("\t\t$_SESSION['"+name[i][2]+"'] = True;\n\t\theader(\"Location:index.php\");\n\t}\n")
            file.write("\telse{\n")
            file.write("\t\t$_SESSION['"+name[i][2]+"'] = False;\n\t\theader(\"Location:index.php\");\n\t}\n}\n")

            file.write('\n')


def create_table_input():
    with open('test2.php', 'w') as file:
        for i in name:
            file.write("<?php if(!isset($_SESSION['"+name[i][2]+"'])){?>\n")
            file.write("\t<form action=\"validate.php\" method=\"post\">\n")
            file.write("\t\t <input type=\"text\", name=\""+i+"\", title=\"flag-input\" placeholder=\"PING{flag}\">\n")
            file.write("\t\t<input type=\"submit\" name=\"submit\" value=\"Submit Flag\">\n")
            file.write("\t</form>\n<?php }?>\n\n")
            file.write("<?php if(isset($_SESSION['"+name[i][2]+"'])){ \n")
            file.write("\tif($_SESSION['"+name[i][2]+"']==False){?>\n")
            file.write("\t\t<form action=\"validate.php\" method=\"post\">\n")
            file.write("\t\t\t<input type=\"text\", name=\""+name[i][2]+"\", title=\"flag-input\" placeholder=\"PING{flag}\">\n\t\t\t<input type=\"submit\" name=\"submit\" value=\"Submit Flag\">\n")
            file.write("\t\t\t <p>Try again</p>\n\t\t</form>\n\t<?php }\n")
            file.write("\telse{\n\t\techo \"<p> Correct! "+name[i][1]+" Points Gained!</p>\";\n\t}\n}\n?>")
            file.write('\n\n<!--Sep-->\n\n')



validate()

#create_table_input()