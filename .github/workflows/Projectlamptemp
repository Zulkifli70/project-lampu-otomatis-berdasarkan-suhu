
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

// Update HOST URL here

#define HOST ""          // Enter HOST URL without "http:// "  and "/" at the end of URL
#define WIFI_SSID ""            // WIFI SSID here                                   
#define WIFI_PASSWORD ""        // WIFI password here

// Declare global variables which will be uploaded to server

  const char *hosts = "http:///pakmoko/insertdb.php";
String sendval, sendval2, postData;


void setup() {

     
Serial.begin(115200); 
Serial.println("Communication Started \n\n");  
delay(1000);
  

pinMode(LED_BUILTIN, OUTPUT);     // initialize built in led on the board
 


WiFi.mode(WIFI_STA);           
WiFi.begin(WIFI_SSID, WIFI_PASSWORD);                                     //try to connect with wifi
Serial.print("Connecting to ");
Serial.print(WIFI_SSID);
while (WiFi.status() != WL_CONNECTED) 
{ Serial.print(".");
    delay(500); }

Serial.println();
Serial.print("Connected to ");
Serial.println(WIFI_SSID);
Serial.print("IP Address is : ");
Serial.println(WiFi.localIP());    //print local IP address

delay(30);
}



void loop() {
  int mati = 0;
  int menyala = 1;
  int temp = random(25,35);
HTTPClient http;    // http object of clas HTTPClient


// Convert integer variables to string
// We can post values to PHP files as  example.com/dbwrite.php?name1=val1&name2=val2&name3=val3
// Hence created variable postDAta and stored our variables in it in desired format
// For more detials, refer:- https://www.tutorialspoint.com/php/php_get_post.htm

// Update Host URL here:-  
  
http.begin(hosts);              // Connect to host where MySQL databse is hosted
http.addHeader("Content-Type", "application/x-www-form-urlencoded");            //Specify content-type header

  
 

  
 if (temp <= 31) {
  sendval = String(temp);  
  sendval2 = menyala;
    postData = "sendval=" + sendval + "&sendval2=" + sendval2;
    Serial.println("Values are, sendval = " + sendval + " and Status Lampu = "+sendval2 );
    int httpCode = http.POST(postData);   // Send POST request to php file and store server response code in variable named httpCode


// if connection eatablished then do this
if (httpCode == 200) { Serial.println("Values uploaded successfully."); Serial.println(httpCode); 
String webpage = http.getString();    // Get html webpage output and store it in a string
Serial.println(webpage + "\n"); 
}

// if failed to connect then return and restart

else { 
  Serial.println(httpCode); 
  Serial.println("Failed to upload values. \n"); 
  http.end(); 
  return; }
    digitalWrite(LED_BUILTIN, HIGH);
    delay (1000);
  }
if (temp >= 31.0) {
  sendval = String(temp);  
  sendval2 = mati;
  postData = "sendval=" + sendval + "&sendval2=" + sendval2;
  Serial.println("Values are, sendval = " + sendval + " and Status Lampu = "+sendval2 );
  int httpCode = http.POST(postData);   // Send POST request to php file and store server response code in variable named httpCode


// if connection eatablished then do this
if (httpCode == 200) { Serial.println("Values uploaded successfully."); Serial.println(httpCode); 
String webpage = http.getString();    // Get html webpage output and store it in a string
Serial.println(webpage + "\n"); 
}

// if failed to connect then return and restart

else { 
  Serial.println(httpCode); 
  Serial.println("Failed to upload values. \n"); 
  http.end(); 
  return; }
    digitalWrite(LED_BUILTIN, LOW);
    delay (1000);
}
}
