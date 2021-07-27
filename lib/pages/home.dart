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
    return ListView.separated(
      padding: EdgeInsets.all(10),
      itemCount: this.posts.length,
      itemBuilder: (context, index) {
        var post = this.posts[index];
        return TextButton(onPressed: ()=>Navigator.pushNamed(context, '/posts/${post.id}'), child: Text(post.title));
      },
      separatorBuilder: (context, index)=> Divider(),
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
        title: Text('title'),
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