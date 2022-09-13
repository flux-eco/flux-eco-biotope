#!/bin/bash
source .env
BUILD_NAME=$USER_NAME/$IMAGE_NAME

docker build -t $BUILD_NAME:latest .
docker push $BUILD_NAME:latest

docker tag $BUILD_NAME:latest $BUILD_NAME:$MAJOR_VERSION
docker push $BUILD_NAME:$MAJOR_VERSION

docker tag $BUILD_NAME:latest $BUILD_NAME:$MAJOR_VERSION.$MINOR_VERSION
docker push $BUILD_NAME:$MAJOR_VERSION.$MINOR_VERSION

docker tag $BUILD_NAME:latest $BUILD_NAME:$MAJOR_VERSION.$MINOR_VERSION.$PATCH_VERSION
docker push $BUILD_NAME:$MAJOR_VERSION.$MINOR_VERSION.$PATCH_VERSION