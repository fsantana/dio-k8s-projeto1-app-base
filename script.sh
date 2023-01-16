#!/bin/bash

echo "Build images..."
docker build -t fsantanajr/dio-minikube-app-backend:0.0.1 backend/.

echo "Registtring images..."

docker push fsantanajr/dio-minikube-app-backend:0.0.1

echo "deploing app"
kubectl apply -f database/volume.yml
kubectl apply -f database/deployment.yml
kubectl apply -f backend/deployment.yml