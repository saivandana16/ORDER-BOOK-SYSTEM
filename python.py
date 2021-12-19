from flask import Flask ,render_template , request , redirect , url_for
import mysql.connector

app = Flask(_name_)
#storing data 
db = []


@app.route("/" , methods = ["POST","GET"] )


def home():
    mydb = mysql.connector.connect(
        host="localhost",
        #port="3306",
        user="root",
        password="",
        
    )
    mycursor = mydb.cursor()
    if request.method == "POST":
        newTask = request.form["Soup"]
        db.append("Soup")
        mycursor.execute("insert into FOODORDERS(item,Ocount) values('Soup','1')")
        mydb.commit()
        mycursor.close()
    return render_template("index.html",tasks = db)
	
	
#function to delete the tasks 
@app.route("/delete/<task>")
def delete(task):
    db.remove(task)
    return redirect(url_for("home"))
 	
 	
if _name_ == "_main_":
 	app.run()