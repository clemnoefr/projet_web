import 'dart:async';
import 'dart:convert';

import 'package:flutter_posts/domain/post.dart';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';

import 'AppBarr.dart';

class HomePage extends StatefulWidget {
  HomePage({Key? key, required this.title}) : super(key: key);

  final String title;


  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {

  List<Post> posts = <Post>[];


  @override
  void initState() {

    super.initState();
    this.loadData();
  }
// contact avec l'API
 void loadData() async {
    var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts');
    //var uri = Uri.parse('http://localhost/api/');
    // var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts', body:{'name': 'doodle);
    var resp = await http.get(uri);
    print(resp);
    Iterable list = jsonDecode(resp.body);
    setState(() {
      this.posts = Post.fromList(list);
    });
  }

  Widget getBody() {
    if (this.posts.length == 0) {
      return Center(

          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Text("Loading"),
            ],
          ));
    }
    return Container(
        height: double.infinity,
        width: double.infinity,
        decoration: BoxDecoration(
            image: DecorationImage(
              image: AssetImage("bg/index.png"),
              fit: BoxFit.cover,
              colorFilter: new ColorFilter.mode(Colors.black.withOpacity(0.2), BlendMode.dstATop),
            )
        ),
      child:
        Column(
          children: [
            Padding(
                padding: EdgeInsets.fromLTRB(0, 150, 0, 0),
                child: Text("Bienvenue sur le site Recette Gourmande", style: TextStyle(fontSize: 22),),
            ),
            Padding(
              padding: EdgeInsets.fromLTRB(50, 150, 50, 0),
              child: Text("Vous trouverez ici toutes sortes de recettes allant des entrées aux dessert en passant par vos plats principaux",  style: TextStyle(fontSize: 22)),
            ),



          ],

        )
    );

  }

  FutureOr onBack(dynamic value){
    this.loadData();
  }

  @override
  Widget build(BuildContext context) {

    return Scaffold(

      body: getBody(),

      appBar: BaseAppBar(
        title: Text(widget.title),
        appBar: AppBar(),
        widgets: <Widget>[Icon(Icons.more_vert)],
      ),

      floatingActionButton: FloatingActionButton(
        onPressed: ()=>Navigator.pushNamed(context, '/post'),
        tooltip: 'Add Post',
        child: Icon(Icons.add),
      ), // This trailing comma makes auto-formatting nicer for build methods.
    );
  }
}