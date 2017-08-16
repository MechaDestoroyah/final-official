**Show Chat Rooms**
----
  Returns json data about all chatrooms.

* **URL**

  public/rooms

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   None

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `[{"id":6,"0":6,"topic":"post your best doggos","1":"post your best doggos"},{"id":7,"0":7,"topic":"where is beef","1":"where is beef"}]`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** ``
	
	
**Show Single Room**
----
  Returns json data for chatlog of specific chatrooms.

* **URL**

  public/rooms/{id}

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
   id=[integer]
 

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `[{"id":1,"0":1,"content":"","1":"","user":"","2":"","datetime":"2017-08-15 04:29:03","3":"2017-08-15 04:29:03","room_id":4,"4":4},{"id":2,"0":2,"content":"get in here! ","1":"get in here! ","user":"LarperMan","2":"LarperMan","datetime":"2017-08-15 04:29:33","3":"2017-08-15 04:29:33","room_id":4,"4":4}]`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `null`

**Create New Room**
----
  Returns json data for new room.

* **URL**

  public/rooms

* **Method:**

  `POST`
  
*  **URL Params**

   **Required:**
   None
   
* **Data Params**

	**Required:**
	topic: [String]

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `[{"id":11,"0":11,"topic":"Oh Hi Denny","1":"Oh Hi Denny"}]`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `null`
	

**Send New Room**
----
  Returns json data for new message.

* **URL**

  public/rooms/{id}

* **Method:**

  `POST`
  
*  **URL Params**

   **Required:**
   id=[integer]
   
* **Data Params**

	**Required:**
	content: [String]
	user: [String]

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `[{"id":3,"0":3,"content":"Oh hai Denny\n","1":"Oh hai Denny\n","user":"Johnny","2":"Johnny","datetime":"2017-08-16 18:56:43","3":"2017-08-16 18:56:43","room_id":11,"4":11}]`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `null`
	
**User Login**
----
  Returns json data for new message.

* **URL**

  public/login

* **Method:**

  `POST`
  
*  **URL Params**

   **Required:**
   
   
* **Data Params**

	**Required:**
	email: [String]
	name: [String]
	id: [integer]

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{"email":"email@email.net","name":"LarperMan","id":"5"}`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `null`