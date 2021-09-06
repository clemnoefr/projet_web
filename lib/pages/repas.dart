import 'dart:async';
import 'dart:convert';

import 'dart:typed_data';

import 'package:flutter_posts/domain/post.dart';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';

import 'AppBarr.dart';

class RepasPage extends StatefulWidget {
  RepasPage({Key? key, required this.title, required this.etat}) : super(key: key);

  final String title;
  final String etat;

  @override
  _RepasPageState createState() => _RepasPageState(etat: this.etat);
}

class _RepasPageState extends State<RepasPage> {

  List<Post> posts = <Post>[];
  final String etat;

  _RepasPageState({required this.etat});

  @override
  void initState() {

    super.initState();
    this.loadData();
  }
// contact avec l'API
  void loadData() async {
    if(etat=="entree"){

    }
    if(etat=="repas"){

    }
    if(etat=="dessert"){

    }
    var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts');
    //var uri = Uri.parse('http://localhost/api/');
    // var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts', body:{'name': 'doodle');
    var resp = await http.get(uri);
    print(resp);
    Iterable list = jsonDecode(resp.body);
    setState(() {
      this.posts = Post.fromList(list);
    });
  }

  Widget getURL(){

    print(etat);
    return Text("toto");
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
        decoration: BoxDecoration(
            image: DecorationImage(
              image: AssetImage("bg/index.png"),
              fit: BoxFit.cover,
              colorFilter: new ColorFilter.mode(Colors.black.withOpacity(0.2), BlendMode.dstATop),
            )
        ),
        child:
        ListView.separated(

          padding: EdgeInsets.all(10),
          itemCount: this.posts.length,
          itemBuilder: (context, index) {
            var post = this.posts[index];
            return TextButton(onPressed: ()=>Navigator.pushNamed(context, '/posts/${post.id}'), child: Text(post.title,style: TextStyle(color: Colors.lightBlue),));
          },
          separatorBuilder: (context, index)=> Divider(),
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